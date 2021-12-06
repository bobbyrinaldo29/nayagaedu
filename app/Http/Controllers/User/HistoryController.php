<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Services\TripayServices;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function __construct(TripayServices $tripayServices)
    {
        $this->tripayService = $tripayServices;
    }

    public function index()
    {
        $email = Auth::user()->email;
        $historyTransaction = Transaction::where('email', $email)->latest()->get();

        return view('dashboard.users.history', compact('email', 'historyTransaction'));
    }

    public function show($reference)
    {
        $detail = $this->tripayService->detailTransaction($reference);

        return view('dashboard.users.invoice', compact('detail'));
    }
}
