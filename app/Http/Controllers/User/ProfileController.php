<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\BankName;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
                'firstname' => Str::ucfirst($data['firstname']),
                'lastname' => Str::ucfirst($data['lastname']),
                'gender' => $data['gender'],
                'phone' => $data['phone'],
                'idCard' => $data['idCard'],
                'address' => $data['address'],
                'postalCode' => $data['postalCode'],
                'fullName' => Str::upper($data['fullName']),
                'bankName' => $data['bankName'],
                'accountNumber' => $data['accountNumber'],
            ]);

            // dd($data);
        return redirect()->route('profile')->withSuccess('Data has been updated');
    }

    public function update(Request $request)
    {
        $id = Auth::user()->id;
        
        $this->validate($request, [
            'password' => 'required|min:8',
        ]);

        User::findOrFail($id)
            ->update([
                'password' => Hash::make($request['password']),
            ]);
        
        return redirect()->route('profile')->withSuccess('Data has been updated');
    }
}
