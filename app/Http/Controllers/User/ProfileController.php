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
use Illuminate\Support\Facades\Validator;

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

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('account'), $imageName);

        $data = $request->validated();
        User::findOrFail($id)
            ->update([
                'name' => Str::ucfirst($data['name']),
                'gender' => $data['gender'],
                'phone' => $data['phone'],
                'photo' => $data['photo'],
                'idCard' => $data['idCard'],
                'address' => $data['address'],
                'postalCode' => $data['postalCode'],
                'fullName' => $data['fullName'],
                'bankName' => $data['bankName'],
                'accountNumber' => $data['accountNumber'],
            ]);

            dd($data);
        // return redirect()->route('profile')->withSuccess('Data has been updated');
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
