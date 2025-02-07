<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrincipleStoreRequest;
use App\Http\Requests\PrincipleUpdateRequest;
use App\Models\Principle;
use App\Repositories\PrincipleRepository;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    protected $principle;

    public function __construct(PrincipleRepository $principle)
    {
        $this->principle = $principle;
    }

    public function student_index()
    {
        return view('pages.admin.master.student.index');
    }

    public function principle_index()
    {
        return view('pages.admin.master.principle.index');
    }

    public function principle_create()
    {
        return view('pages.admin.master.principle.create');
    }

    public function principle_store(PrincipleStoreRequest $request)
    {
        if ($this->principle->store($request)) {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Tambah Kepala Sekolah Berhasil!'
            ]);
        } else {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Tambah Kepala Sekolah Gagal!'
            ]);
        }
    }

    public function principle_edit(Principle $principle)
    {
        return view('pages.admin.master.principle.edit', compact('principle'));
    }

    public function principle_update(PrincipleUpdateRequest $request, Principle $principle)
    {
        if ($this->principle->update($request, $principle->id)) {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Ubah Kepala Sekolah Berhasil!'
            ]);
        } else {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Ubah Kepala Sekolah Gagal!'
            ]);
        }
    }
}
