<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentStoreRequest;
use App\Repositories\RegisterRepository;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected $register;

    public function __construct(RegisterRepository $register)
    {
        $this->register = $register;
    }

    public function index()
    {
        return view('auth.signup');
    }

    public function store(StudentStoreRequest $request)
    {
        if ($this->register->store($request)) {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Register Success!'
            ]);
        } else {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Register Failed!'
            ]);
        }
    }
}
