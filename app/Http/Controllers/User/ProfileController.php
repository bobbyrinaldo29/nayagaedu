<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\BankName;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $bankName = BankName::all();
        $profileUser = User::all();

        return view('dashboard.users.profile', compact('bankName', 'profileUser'));
    }

    public function create(ProfileRequest $request)
    {
        $id = Auth::user()->id;
        $data = $request->validated();
        User::findOrFail($id)
            ->update([
                'name' => Str::ucfirst($data['name']),
                'gender' => $data['gender'],
                'phone' => $data['phone'],
                'idCard' => $data['idCard'],
                'address' => $data['address'],
                'postalCode' => $data['postalCode'],
                'fullName' => $data['fullName'],
                'bankName' => $data['bankName'],
                'accountNumber' => $data['accountNumber'],
            ]);
        
            // dd($user);
        return redirect()->route('profile')->withSuccess('Data has been updated');
    }
}
