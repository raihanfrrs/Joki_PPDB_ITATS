<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TimerRepository;
use Illuminate\Http\RedirectResponse;
use App\Repositories\RegisterRepository;
use App\Http\Requests\StudentStoreRequest;

class RegisterController extends BaseController
{
    protected $register, $timer;

    public function __construct(RegisterRepository $register, TimerRepository $timer)
    {
        parent::__construct($timer);
        $this->register = $register;
    }

    public function index()
    {
        return view('auth.signup');
    }

    public function store(StudentStoreRequest $request): RedirectResponse
    {
        if ($redirect = $this->checkRegistrationDeadline()) {
            return $redirect;
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
