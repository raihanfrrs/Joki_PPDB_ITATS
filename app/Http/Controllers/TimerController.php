<?php

namespace App\Http\Controllers;

use App\Http\Requests\TimerStoreRequest;
use App\Repositories\TimerRepository;
use Illuminate\Http\Request;

class TimerController extends Controller
{
    protected $timer;

    public function __construct(TimerRepository $timer)
    {
        $this->timer = $timer;
    }

    public function index()
    {
        return view('pages.admin.timer.index', [
            'timer' => $this->timer->getTimer()
        ]);
    }

    public function store(TimerStoreRequest $request)
    {
        if ($request->end_at < date('Y-m-d H:i:s')) {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Tanggal akhir harus lebih besar dari tanggal sekarang!'
            ]);
        }

        if ($this->timer->store($request)) {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Batas Pendaftaran Diaktifkan!'
            ]);
        }
    }

    public function destroy()
    {
        if ($this->timer->destroy()) {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Batas Pendaftaran Dinonaktifkan!'
            ]);
        } else {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Batas Pendaftaran Gagal Dinonaktifkan!'
            ]);
        }
    }
}
