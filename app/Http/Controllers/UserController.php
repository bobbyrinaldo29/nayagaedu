<?php

namespace App\Http\Controllers;

use App\Models\BankName;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $memberList = User::where('referred_by', Auth::user()->username)->where('package', '!=', null)->get();
        return view('dashboard.users.index', compact('memberList'));
    }
}
