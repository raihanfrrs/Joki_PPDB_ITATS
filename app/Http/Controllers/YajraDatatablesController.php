<?php

namespace App\Http\Controllers;

use App\Repositories\PrincipleRepository;
use Illuminate\Http\Request;
use App\Repositories\StudentRepository;
use Yajra\DataTables\Facades\DataTables;

class YajraDatatablesController extends Controller
{
    protected $student, $principle;

    public function __construct(StudentRepository $student, PrincipleRepository $principle)
    {
        $this->student = $student;
        $this->principle = $principle;
    }

    public function student()
    {
        $students = $this->student->all();

        return DataTables::of($students)
            ->addColumn('index', function ($model) use ($students) {
                return $students->search($model) + 1;
            })
            ->addColumn('nisn', function ($model) {
                return view('components.data.yajra.data-master-students.nisn-column', compact('model'))->render();
            })
            ->addColumn('nik', function ($model) {
                return view('components.data.yajra.data-master-students.nik-column', compact('model'))->render();
            })
            ->addColumn('name', function ($model) {
                return view('components.data.yajra.data-master-students.name-column', compact('model'))->render();
            })
            ->addColumn('phone', function ($model) {
                return view('components.data.yajra.data-master-students.phone-column', compact('model'))->render();
            })
            ->addColumn('email', function ($model) {
                return view('components.data.yajra.data-master-students.email-column', compact('model'))->render();
            })
            ->addColumn('pob_dob', function ($model) {
                return view('components.data.yajra.data-master-students.pob-dob-column', compact('model'))->render();
            })
            ->addColumn('gender', function ($model) {
                return view('components.data.yajra.data-master-students.gender-column', compact('model'))->render();
            })
            ->addColumn('address', function ($model) {
                return view('components.data.yajra.data-master-students.address-column', compact('model'))->render();
            })
            ->addColumn('status_registration', function ($model) {
                return view('components.data.yajra.data-master-students.status-registration-column', compact('model'))->render();
            })
            ->addColumn('status_payment', function ($model) {
                return view('components.data.yajra.data-master-students.status-payment-column', compact('model'))->render();
            })
            ->addColumn('created_at', function ($model) {
                return view('components.data.yajra.data-master-students.created-at-column', compact('model'))->render();
            })
            ->addColumn('action', function ($model) {
                return view('components.data.yajra.data-master-students.action-column', compact('model'))->render();
            })
            ->rawColumns(['index', 'nisn', 'nik', 'name', 'phone', 'email', 'pob_dob', 'gender', 'address', 'status_registration', 'status_payment', 'created_at', 'action'])
            ->make(true);
    }

    public function principle()
    {
        $principles = $this->principle->all();

        return DataTables::of($principles)
            ->addColumn('index', function ($model) use ($principles) {
                return $principles->search($model) + 1;
            })
            ->addColumn('nip', function ($model) {
                return view('components.data.yajra.data-master-principles.nip-column', compact('model'))->render();
            })
            ->addColumn('name', function ($model) {
                return view('components.data.yajra.data-master-principles.name-column', compact('model'))->render();
            })
            ->addColumn('title', function ($model) {
                return view('components.data.yajra.data-master-principles.title-column', compact('model'))->render();
            })
            ->addColumn('phone', function ($model) {
                return view('components.data.yajra.data-master-principles.phone-column', compact('model'))->render();
            })
            ->addColumn('email', function ($model) {
                return view('components.data.yajra.data-master-principles.email-column', compact('model'))->render();
            })
            ->addColumn('pob_dob', function ($model) {
                return view('components.data.yajra.data-master-principles.pob-dob-column', compact('model'))->render();
            })
            ->addColumn('gender', function ($model) {
                return view('components.data.yajra.data-master-principles.gender-column', compact('model'))->render();
            })
            ->addColumn('address', function ($model) {
                return view('components.data.yajra.data-master-principles.address-column', compact('model'))->render();
            })
            ->addColumn('created_at', function ($model) {
                return view('components.data.yajra.data-master-principles.created-at-column', compact('model'))->render();
            })
            ->addColumn('action', function ($model) {
                return view('components.data.yajra.data-master-principles.action-column', compact('model'))->render();
            })
            ->rawColumns(['index', 'nip', 'name', 'title', 'phone', 'email', 'pob_dob', 'gender', 'address', 'created_at', 'action'])
            ->make(true);
    }
}
