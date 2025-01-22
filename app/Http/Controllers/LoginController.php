<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Repositories\LoginRepository;
use App\Http\Requests\LoginStoreRequest;

class LoginController extends Controller
{
    protected $login;

    public function __construct(LoginRepository $login)
    {
        $this->login = $login;
    }

    public function index()
    {
        return view('auth.signin');
    }

    public function store(LoginStoreRequest $request)
    {
        $kredensial = $request->only('username', 'password');

        $checkUser = $this->login->getUsernameAndRole($kredensial['username']);

        if (!$checkUser) {
            return back()->withErrors([
                'username' => 'Wrong username or password!'
            ])->onlyInput('username');
        }

        if (!Hash::check($request->password, $checkUser->password)) {
            return back()->withErrors([
                'username' => 'Wrong username or password!'
            ])->onlyInput('username');
        }

        if (Auth::attempt($kredensial)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user) {
                return redirect()->intended('/')->with([
                    'flash-type' => 'sweetalert',
                    'case' => 'default',
                    'position' => 'center',
                    'type' => 'success',
                    'message' => 'Berhasil Masuk!'
                ]);
            }

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'Wrong username or password!'
        ])->onlyInput('username');
    }
}
