<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TimerRepository;
use App\Repositories\RegisterRepository;
use App\Http\Requests\StudentStoreRequest;

class RegisterController extends Controller
{
    protected $register, $timer;

    public function __construct(RegisterRepository $register, TimerRepository $timer)
    {
        $this->register = $register;
        $this->timer = $timer;
    }

    public function index()
    {
        return view('auth.signup');
    }

    public function store(StudentStoreRequest $request)
    {
        if ($this->timer->getTimer()->end_at < now()) {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Batas Pendaftaran Sudah Berakhir!'
            ]);
        }

        if ($this->register->store($request)) {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Register Success!'
            ]);
        }
    }
}
