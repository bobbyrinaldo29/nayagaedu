<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index()
    {
        $memberList = User::where('referred_by', Auth::user()->username)->where('package', '!=', null)->get();
        
        return view('dashboard.users.members', compact('memberList'));
    }
}
