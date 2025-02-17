<?php

namespace App\Http\Controllers;

use App\Repositories\TimerRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class BaseController extends Controller
{
    protected $timer;

    public function __construct()
    {
        $this->timer = app(TimerRepository::class);
    }

    protected function checkRegistrationDeadline(): ?RedirectResponse
    {
        if ($this->timer->getTimer()->end_at < now()) {
            return Redirect::back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Batas Pendaftaran Sudah Berakhir!'
            ]);
        }

        return null;
    }
}
