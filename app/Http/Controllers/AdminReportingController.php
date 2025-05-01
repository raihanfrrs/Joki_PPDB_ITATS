<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Repositories\PaymentRepository;
use App\Repositories\StudentRepository;
use Illuminate\Http\Request;

class AdminReportingController extends Controller
{
    protected $student;

    public function __construct(StudentRepository $student)
    {
        $this->student = $student;
    }

    public function student_passed_index()
    {
        return view('pages.admin.reporting.passed.index');
    }

    public function student_passed_show(Student $student)
    {
        return view('pages.admin.verification.registration.show', [
            'registration' => $student->registration
        ]);
    }

    public function student_candidate_index()
    {
        return view('pages.admin.reporting.candidate.index');
    }

    public function student_candidate_show(Student $student)
    {
        return view('pages.admin.verification.registration.show', [
            'registration' => $student->registration
        ]);
    }

    public function finance_recap_index()
    {
        return view('pages.admin.reporting.finance.recap.index', [
            'studentsPassed' => $this->student->getStudentsWhereRegistrationAndPaymentAccepted(),
            'totalApprovedPayment' => $this->student->getStudentsWithPaymentJoin('approved', '=', 'inner'),
            'totalUnapprovedPayment' => $this->student->getStudentsWithPaymentJoin('approved', '!=', 'left')
        ]);
    }
}
