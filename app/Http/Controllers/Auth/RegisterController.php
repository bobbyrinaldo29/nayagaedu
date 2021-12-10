<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::LOGIN;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        $message = [
            'username.min' => 'Username minimum 5 character',
            'username.unique' => 'Username already exist',
            'email.unique' => 'Email already exist',
            'password.confirmed' => 'Password confirm does not match',
            'password.min' => 'Password minimum 8 character',
            'referred_by.exists' => 'Referral invalid',
            'g-recaptcha-response.recaptcha' => 'Recaptcha is require',
        ];

        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255', 'min:5', 'unique:users,username'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'referred_by' => ['exists:users,username', 'nullable'],
            'g-recaptcha-response' => 'recaptcha',
        ], $message);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // dd($data);
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'role' => 2,
            'password' => Hash::make($data['password']),
            'referred_by' => $data['referred_by'],
        ]);
    }

    public function store(Type $var = null)
    {
        # code...
    }
}
