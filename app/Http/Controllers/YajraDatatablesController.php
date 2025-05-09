<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PaymentRepository;
use App\Repositories\StudentRepository;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\PrincipleRepository;
use App\Repositories\SchoolFeeRepository;
use App\Repositories\RegistrationRepository;

class YajraDatatablesController extends Controller
{
    protected $student, $principle, $registration, $payment, $schoolFee;

    public function __construct(StudentRepository $student, PrincipleRepository $principle, RegistrationRepository $registration, PaymentRepository $payment, SchoolFeeRepository $schoolFee)
    {
        $this->student = $student;
        $this->principle = $principle;
        $this->registration = $registration;
        $this->payment = $payment;
        $this->schoolFee = $schoolFee;
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

    public function school_fee()
    {
        $schoolFees = $this->schoolFee->all();

        return DataTables::of($schoolFees)
            ->addColumn('index', function ($model) use ($schoolFees) {
                return $schoolFees->search($model) + 1;
            })
            ->addColumn('form', function ($model) {
                return view('components.data.yajra.data-school-fee.form-column', compact('model'))->render();
            })
            ->addColumn('development_fund', function ($model) {
                return view('components.data.yajra.data-school-fee.development-fund-column', compact('model'))->render();
            })
            ->addColumn('education_development_donation', function ($model) {
                return view('components.data.yajra.data-school-fee.education-development-donation-column', compact('model'))->render();
            })
            ->addColumn('batik_uniform', function ($model) {
                return view('components.data.yajra.data-school-fee.batik-uniform-column', compact('model'))->render();
            })
            ->addColumn('scout_uniform', function ($model) {
                return view('components.data.yajra.data-school-fee.scout-uniform-column', compact('model'))->render();
            })
            ->addColumn('total_fee', function ($model) {
                return view('components.data.yajra.data-school-fee.total-fee-column', compact('model'))->render();
            })
            ->addColumn('created_at', function ($model) {
                return view('components.data.yajra.data-school-fee.created-at-column', compact('model'))->render();
            })
            ->addColumn('academic_year', function ($model) {
                return view('components.data.yajra.data-school-fee.academic-year-column', compact('model'))->render();
            })
            ->addColumn('action', function ($model) {
                return view('components.data.yajra.data-school-fee.action-column', compact('model'))->render();
            })
            ->rawColumns(['index', 'form', 'development_fund', 'education_development_donation', 'batik_uniform', 'scout_uniform', 'total_fee', 'created_at', 'academic_year', 'action'])
            ->make(true);
    }

    public function reporting_finance()
    {
        $students = $this->student->getStudentsRegistrationAndPayment();
        // dd($students);
        // dd($students[0]->payment->first());
        // dd($students[0]->payment[0]->getFirstMediaUrl('payment_images'));
        // dd($students[0]->payment[0]->school_fee);

        return DataTables::of($students)
            ->addColumn('index', function ($model) use ($students) {
                return $students->search($model) + 1;
            })
            ->addColumn('student', function ($model) {
                return view('components.data.yajra.data-finance-reporting.student-column', compact('model'))->render();
            })
            ->addColumn('registration_at', function ($model) {
                return view('components.data.yajra.data-finance-reporting.registration-at-column', compact('model'))->render();
            })
            ->addColumn('payment_at', function ($model) {
                return view('components.data.yajra.data-finance-reporting.payment-at-column', compact('model'))->render();
            })
            ->addColumn('total_cost', function ($model) {
                return view('components.data.yajra.data-finance-reporting.total-cost-column', compact('model'))->render();
            })
            ->addColumn('payment_status', function ($model) {
                return view('components.data.yajra.data-finance-reporting.payment-status', compact('model'))->render();
            })
            // ->addColumn('receipt', function ($model) {
            //     return view('components.data.yajra.data-finance-reporting.receipt-column', compact('model'))->render();
            // })
            ->addColumn('action', function ($model) {
                return view('components.data.yajra.data-finance-reporting.action-column', compact('model'))->render();
            })
            ->rawColumns(['index', 'student', 'registration_at', 'payment_at', 'total_cost', 'payment_status', 'action'])
            ->make(true);
    }
}
