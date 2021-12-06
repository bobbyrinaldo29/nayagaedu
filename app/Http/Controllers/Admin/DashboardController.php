<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BankName;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::where('package', '!=', null)->count();
        $bankCount = BankName::where('status', '1')->count();
        $transactionCount = Transaction::all()->count();
        
        return view('dashboard.admin.index', compact('userCount', 'bankCount', 'transactionCount'));
    }
}
