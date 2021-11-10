<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BankName;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::where('role', '2')->count();
        $bankCount = BankName::where('status', '1')->count();
        
        return view('dashboard.admin.index', compact('userCount', 'bankCount'));
    }
}
