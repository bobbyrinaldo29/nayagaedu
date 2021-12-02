<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Transaction;
use App\Services\TripayServices;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function __construct(TripayServices $tripayServices)
    {
        $this->tripayService = $tripayServices;
    }

    public function index($id)
    {
        $package = Package::findOrFail($id);
        $channels = $this->tripayService->getPaymentChannel();

        return view('dashboard.users.checkout', compact('package', 'channels'));
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
