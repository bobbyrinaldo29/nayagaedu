<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index()
    {
        $email = Auth::user()->email;
        $historyTransaction = Transaction::where('email', $email)->latest()->get();

        return view('dashboard.users.history', compact('email', 'historyTransaction'));
    }

    public function show($id)
    {
        
    }
}
