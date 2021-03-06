<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use App\Services\TripayServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionCallbackController extends Controller
{
    protected $privateKey = 'qUmWG-JYqWi-O3SVy-2wavl-FnCf4';

    public function __construct(TripayServices $tripayServices)
    {
        $this->tripayService = $tripayServices;
    }

    public function handle(Request $request)
    {
        $callbackSignature = $request->server('HTTP_X_CALLBACK_SIGNATURE');
        $json = $request->getContent();
        $signature = hash_hmac('sha256', $json, $this->privateKey);

        if ($signature !== (string) $callbackSignature) {
            return 'Invalid signature';
        }

        if ('payment_status' !== (string) $request->server('HTTP_X_CALLBACK_EVENT')) {
            return 'Invalid callback event, no action was taken';
        }

        $data = json_decode($json);
        $reference = $data->reference;
        $detail = $this->tripayService->detailTransaction($reference);
        $pack = $detail->order_items[0]->name;

        $transaction = Transaction::where('reference', $reference)
            ->where('status', 'UNPAID')
            ->first();

        if ($data->status == "PAID") {
            User::where('email', strval($detail->customer_email))
                ->update([
                    'package' => strval($pack),
                ]);
        }

        if (!$transaction) {
            return 'Invoice not found or current status is not UNPAID';
        }

        if ((int) $data->total_amount !== (int) $transaction->total_amount) {
            return 'Invalid amount';
        }

        switch ($data->status) {
            case 'PAID':
                $transaction->update(['status' => 'PAID']);
                return response()->json(['success' => true]);

            case 'EXPIRED':
                $transaction->update(['status' => 'EXPIRED']);
                return response()->json(['success' => true]);

            case 'FAILED':
                $transaction->update(['status' => 'FAILED']);
                return response()->json(['success' => true]);

            default:
                return 'Unrecognized payment status';
        }
    }
}
