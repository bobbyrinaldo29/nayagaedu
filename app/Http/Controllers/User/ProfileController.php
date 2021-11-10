<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BankName;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $bankName = BankName::all();

        return view('dashboard.users.profile', compact('bankName'));
    }
}
