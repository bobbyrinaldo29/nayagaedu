<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Transaction;
use App\Services\CurrencyConverter;
use App\Services\TripayServices;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function __construct(TripayServices $tripayServices, CurrencyConverter $converter)
    {
        $this->tripayService = $tripayServices;
        $this->converter = $converter;
    }

    public function index($id)
    {
        $package = Package::findOrFail($id);
        $channels = $this->tripayService->getPaymentChannel();
        $getCurrency = $this->converter->getConverter();

        $convert = $getCurrency->rates->IDR;
        $total = $package->price * $convert;

        return view('dashboard.users.checkout', compact('package', 'channels', 'convert', 'total'));
    }

    public function show($reference)
    {
        $detail = $this->tripayService->detailTransaction($reference);

        $time = Transaction::where('reference', $reference)->first()->created_at->toDateTimeString();

        return view('dashboard.users.payment', compact('detail', 'time'));
    }

    public function create(Request $request)
    {
        $transaction = $this->tripayService->requestTransaction($request);
        Transaction::create([
            'reference' => $transaction->reference,
            'merchant_ref' => $transaction->merchant_ref,
            'package_name' => $request->package_name,
            'fullname' => $transaction->customer_name,
            'email' => $transaction->customer_email,
            'phone' => $request->phone,
            'address' => $request->address,
            'total_amount' => $transaction->amount,
            'method' => $request->method,
            'status' => $transaction->status,
        ]);

        return redirect()->route('invoice.show', ['reference' => $transaction->reference]);
    }
}
