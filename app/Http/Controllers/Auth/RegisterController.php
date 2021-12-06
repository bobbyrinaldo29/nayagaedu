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
            'username.min' => 'Username minimum 3 character',
            'email.unique' => 'Email already exist',
            'password.confirmed' => 'Password confirm does not match',
            'password.min' => 'Password minimum 8 character',
            'g-recaptcha-response.recaptcha' => 'Recaptcha is require',
        ];

        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        // $length = rand(1,4);
        // $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        // $charactersLength = strlen($characters);
        // $referral = '';
        // for ($i = 0; $i < $length; $i++) {
        //     $referral .= $characters[rand(0, $charactersLength - 1)];
        // }

        $ref = User::where('username', $data['referred_by'])->get();

        if ($ref) {
            return User::create([
                'username' => $data['username'],
                'email' => $data['email'],
                'role' => 2,
                'password' => Hash::make($data['password']),
                'referred_by' => $data['referred_by'],
            ]);
        }

        return redirect('/register');
    }
}
