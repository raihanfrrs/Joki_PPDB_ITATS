<?php

namespace App\Http\Controllers;

use App\Repositories\PaymentRepository;
use App\Repositories\PrincipleRepository;
use App\Repositories\RegistrationRepository;
use Illuminate\Http\Request;
use App\Repositories\StudentRepository;
use Yajra\DataTables\Facades\DataTables;

class YajraDatatablesController extends Controller
{
    protected $student, $principle, $registration, $payment;

    public function __construct(StudentRepository $student, PrincipleRepository $principle, RegistrationRepository $registration, PaymentRepository $payment)
    {
        $this->student = $student;
        $this->principle = $principle;
        $this->registration = $registration;
        $this->payment = $payment;
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

    public function student_report()
    {
        $students = $this->student->getStudentsWhereRegistrationAndPaymentAccepted();

        return DataTables::of($students)
            ->addColumn('index', function ($model) use ($students) {
                return $students->search($model) + 1;
            })
            ->addColumn('nisn', function ($model) {
                return view('components.data.yajra.data-master-student-report.nisn-column', compact('model'))->render();
            })
            ->addColumn('nik', function ($model) {
                return view('components.data.yajra.data-master-student-report.nik-column', compact('model'))->render();
            })
            ->addColumn('name', function ($model) {
                return view('components.data.yajra.data-master-student-report.name-column', compact('model'))->render();
            })
            ->addColumn('phone', function ($model) {
                return view('components.data.yajra.data-master-student-report.phone-column', compact('model'))->render();
            })
            ->addColumn('email', function ($model) {
                return view('components.data.yajra.data-master-student-report.email-column', compact('model'))->render();
            })
            ->addColumn('pob_dob', function ($model) {
                return view('components.data.yajra.data-master-student-report.pob-dob-column', compact('model'))->render();
            })
            ->addColumn('gender', function ($model) {
                return view('components.data.yajra.data-master-student-report.gender-column', compact('model'))->render();
            })
            ->addColumn('address', function ($model) {
                return view('components.data.yajra.data-master-student-report.address-column', compact('model'))->render();
            })
            ->addColumn('created_at', function ($model) {
                return view('components.data.yajra.data-master-student-report.created-at-column', compact('model'))->render();
            })
            ->addColumn('action', function ($model) {
                return view('components.data.yajra.data-master-student-report.action-column', compact('model'))->render();
            })
            ->rawColumns(['index', 'nisn', 'nik', 'name', 'phone', 'email', 'pob_dob', 'gender', 'address', 'created_at', 'action'])
            ->make(true);
    }

    public function verification_registration()
    {
        $registration = $this->registration->getAllRegistration();

        return DataTables::of($registration)
            ->addColumn('index', function ($model) use ($registration) {
                return $registration->search($model) + 1;
            })
            ->addColumn('nisn', function ($model) {
                return view('components.data.yajra.data-verification-registration.nisn-column', compact('model'))->render();
            })
            ->addColumn('nik', function ($model) {
                return view('components.data.yajra.data-verification-registration.nik-column', compact('model'))->render();
            })
            ->addColumn('name', function ($model) {
                return view('components.data.yajra.data-verification-registration.name-column', compact('model'))->render();
            })
            ->addColumn('pob_dob', function ($model) {
                return view('components.data.yajra.data-verification-registration.pob-dob-column', compact('model'))->render();
            })
            ->addColumn('gender', function ($model) {
                return view('components.data.yajra.data-verification-registration.gender-column', compact('model'))->render();
            })
            ->addColumn('address', function ($model) {
                return view('components.data.yajra.data-verification-registration.address-column', compact('model'))->render();
            })
            ->addColumn('status_registration', function ($model) {
                return view('components.data.yajra.data-verification-registration.status-registration-column', compact('model'))->render();
            })
            ->addColumn('created_at', function ($model) {
                return view('components.data.yajra.data-verification-registration.created-at-column', compact('model'))->render();
            })
            ->addColumn('action', function ($model) {
                return view('components.data.yajra.data-verification-registration.action-column', compact('model'))->render();
            })
            ->rawColumns(['index', 'nisn', 'nik', 'name', 'pob_dob', 'gender', 'address', 'status_registration', 'created_at', 'action'])
            ->make(true);
    }

    public function verification_payment()
    {
        $payments = $this->payment->getAllPayment();

        return DataTables::of($payments)
            ->addColumn('index', function ($model) use ($payments) {
                return $payments->search($model) + 1;
            })
            ->addColumn('nisn', function ($model) {
                return view('components.data.yajra.data-verification-payment.nisn-column', compact('model'))->render();
            })
            ->addColumn('nik', function ($model) {
                return view('components.data.yajra.data-verification-payment.nik-column', compact('model'))->render();
            })
            ->addColumn('name', function ($model) {
                return view('components.data.yajra.data-verification-payment.name-column', compact('model'))->render();
            })
            ->addColumn('pob_dob', function ($model) {
                return view('components.data.yajra.data-verification-payment.pob-dob-column', compact('model'))->render();
            })
            ->addColumn('gender', function ($model) {
                return view('components.data.yajra.data-verification-payment.gender-column', compact('model'))->render();
            })
            ->addColumn('address', function ($model) {
                return view('components.data.yajra.data-verification-payment.address-column', compact('model'))->render();
            })
            ->addColumn('status_payment', function ($model) {
                return view('components.data.yajra.data-verification-payment.status-payment-column', compact('model'))->render();
            })
            ->addColumn('created_at', function ($model) {
                return view('components.data.yajra.data-verification-payment.created-at-column', compact('model'))->render();
            })
            ->addColumn('action', function ($model) {
                return view('components.data.yajra.data-verification-payment.action-column', compact('model'))->render();
            })
            ->rawColumns(['index', 'nisn', 'nik', 'name', 'pob_dob', 'gender', 'address', 'status_payment', 'created_at', 'action'])
            ->make(true);
    }

    public function payment()
    {
        $payments = $this->payment->all();

        return DataTables::of($payments)
            ->addColumn('index', function ($model) use ($payments) {
                return $payments->search($model) + 1;
            })
            ->addColumn('payment', function ($model) {
                return view('components.data.yajra.data-payment.payment-column', compact('model'))->render();
            })
            ->addColumn('status', function ($model) {
                return view('components.data.yajra.data-payment.status-column', compact('model'))->render();
            })
            ->addColumn('created_at', function ($model) {
                return view('components.data.yajra.data-payment.created-at-column', compact('model'))->render();
            })
            ->addColumn('action', function ($model) {
                return view('components.data.yajra.data-payment.action-column', compact('model'))->render();
            })
            ->rawColumns(['index', 'payment', 'status', 'created_at', 'action'])
            ->make(true);
    }

    public function reporting_student_passed()
    {
        $students = $this->student->getStudentsWhereRegistrationAndPaymentAccepted();

        return DataTables::of($students)
            ->addColumn('index', function ($model) use ($students) {
                return $students->search($model) + 1;
            })
            ->addColumn('nisn', function ($model) {
                return view('components.data.yajra.data-reporting-student-passed.nisn-column', compact('model'))->render();
            })
            ->addColumn('nik', function ($model) {
                return view('components.data.yajra.data-reporting-student-passed.nik-column', compact('model'))->render();
            })
            ->addColumn('name', function ($model) {
                return view('components.data.yajra.data-reporting-student-passed.name-column', compact('model'))->render();
            })
            ->addColumn('phone', function ($model) {
                return view('components.data.yajra.data-reporting-student-passed.phone-column', compact('model'))->render();
            })
            ->addColumn('email', function ($model) {
                return view('components.data.yajra.data-reporting-student-passed.email-column', compact('model'))->render();
            })
            ->addColumn('pob_dob', function ($model) {
                return view('components.data.yajra.data-reporting-student-passed.pob-dob-column', compact('model'))->render();
            })
            ->addColumn('gender', function ($model) {
                return view('components.data.yajra.data-reporting-student-passed.gender-column', compact('model'))->render();
            })
            ->addColumn('address', function ($model) {
                return view('components.data.yajra.data-reporting-student-passed.address-column', compact('model'))->render();
            })
            ->addColumn('created_at', function ($model) {
                return view('components.data.yajra.data-reporting-student-passed.created-at-column', compact('model'))->render();
            })
            ->addColumn('action', function ($model) {
                return view('components.data.yajra.data-reporting-student-passed.action-column', compact('model'))->render();
            })
            ->rawColumns(['index', 'nisn', 'nik', 'name', 'phone', 'email', 'pob_dob', 'gender', 'address', 'created_at', 'action'])
            ->make(true);
    }

    public function reporting_student_candidate()
    {
        $students = $this->student->getStudentsWhereRegistrationAndPaymentWaiting();

        return DataTables::of($students)
            ->addColumn('index', function ($model) use ($students) {
                return $students->search($model) + 1;
            })
            ->addColumn('nisn', function ($model) {
                return view('components.data.yajra.data-reporting-student-candidate.nisn-column', compact('model'))->render();
            })
            ->addColumn('nik', function ($model) {
                return view('components.data.yajra.data-reporting-student-candidate.nik-column', compact('model'))->render();
            })
            ->addColumn('name', function ($model) {
                return view('components.data.yajra.data-reporting-student-candidate.name-column', compact('model'))->render();
            })
            ->addColumn('phone', function ($model) {
                return view('components.data.yajra.data-reporting-student-candidate.phone-column', compact('model'))->render();
            })
            ->addColumn('email', function ($model) {
                return view('components.data.yajra.data-reporting-student-candidate.email-column', compact('model'))->render();
            })
            ->addColumn('pob_dob', function ($model) {
                return view('components.data.yajra.data-reporting-student-candidate.pob-dob-column', compact('model'))->render();
            })
            ->addColumn('gender', function ($model) {
                return view('components.data.yajra.data-reporting-student-candidate.gender-column', compact('model'))->render();
            })
            ->addColumn('address', function ($model) {
                return view('components.data.yajra.data-reporting-student-candidate.address-column', compact('model'))->render();
            })
            ->addColumn('created_at', function ($model) {
                return view('components.data.yajra.data-reporting-student-candidate.created-at-column', compact('model'))->render();
            })
            ->addColumn('action', function ($model) {
                return view('components.data.yajra.data-reporting-student-candidate.action-column', compact('model'))->render();
            })
            ->rawColumns(['index', 'nisn', 'nik', 'name', 'phone', 'email', 'pob_dob', 'gender', 'address', 'created_at', 'action'])
            ->make(true);
    }
}
