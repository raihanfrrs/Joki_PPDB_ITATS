<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Principle;
use App\Models\SchoolFee;
use Illuminate\Http\Request;
use App\Repositories\PrincipleRepository;
use App\Repositories\SchoolFeeRepository;
use App\Http\Requests\PrincipleStoreRequest;
use App\Http\Requests\SchoolFeeStoreRequest;
use App\Http\Requests\PrincipleUpdateRequest;

class MasterController extends Controller
{
    protected $principle, $schoolFee;

    public function __construct(PrincipleRepository $principle, SchoolFeeRepository $schoolFee)
    {
        $this->principle = $principle;
        $this->schoolFee = $schoolFee;
    }

    public function student_index()
    {
        return view('pages.admin.master.student.index');
    }

    public function student_show(Student $student)
    {
        return view('pages.admin.verification.registration.show', [
            'registration' => $student->registration
        ]);
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

    public function school_fee_index()
    {
        return view('pages.admin.master.school_fee.index');
    }

    public function school_fee_create()
    {
        return view('pages.admin.master.school_fee.create');
    }

    public function school_fee_store(SchoolFeeStoreRequest $request)
    {
        if ($this->schoolFee->store($request)) {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Tambah Biaya Sekolah Berhasil!'
            ]);
        } else {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Tambah Biaya Sekolah Gagal!'
            ]);
        }
    }

    public function school_fee_edit(SchoolFee $school_fee)
    {
        return view('pages.admin.master.school_fee.edit', compact('school_fee'));
    }

    public function school_fee_update(SchoolFeeStoreRequest $request, SchoolFee $school_fee) {}
}
