<?php

namespace App\Repositories;

use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentRepository
{
    public function all()
    {
        return Student::all();
    }

    public function find($id)
    {
        return Student::find($id);
    }

    public function getStudentsWhereRegistrationAndPaymentAccepted()
    {
        return Student::whereHas('registration', function ($query) {
            $query->where('status', 'approved');
        })->whereHas('payment', function ($query) {
            $query->where('status', 'approved');
        })->get();
    }

    public function getStudentsWhereRegistrationAndPaymentWaiting()
    {
        return Student::whereHas('registration', function ($query) {
            $query->where('status', 'waiting');
        })
            ->orWhereHas('payment', function ($query) {
                $query->where('status', 'waiting');
            })
            ->get();
    }

    public function getStudentsRegistrationAndPayment()
    {
        // return Student::with([
        //     'registration' => fn($q) => $q->where('status', 'approved'),
        //     'payment' => fn($q) => $q->where('status', 'approved')->with('media', 'school_fee'),
        // ])->get();

        return Student::with([
            'registration', // Mengambil semua data registration tanpa filter status
            'payment' => function ($q) {
                $q->orderByDesc('created_at')
                    ->with('media', 'school_fee');
            }
        ])->get();
    }

    public function update($data)
    {
        return DB::transaction(function () use ($data) {
            Student::where('id', auth()->user()->student->id)->update([
                'kk_number' => $data['kk_number'],
                'hobby' => $data['hobby'],
                'goal' => $data['goal']
            ]);

            return true;
        });
    }

    public function getStudentsWithPaymentJoin($status = null, $operator = '=', $joinType = 'left')
    {
        $joinType = strtolower($joinType);
        $query = Student::query();

        // Subquery untuk mendapatkan pembayaran terbaru per student
        $latestPayments = DB::table('payments')
            ->select('payments.*', 'school_fees.total_fee')
            ->join(DB::raw('(
        SELECT student_id, MAX(id) as latest_id
        FROM payments
        GROUP BY student_id
    ) as latest'), 'payments.id', '=', 'latest.latest_id')
            ->leftJoin('school_fees', 'payments.school_fee_id', '=', 'school_fees.id');

        // Gabungkan student dengan pembayaran terbaru
        switch ($joinType) {
            case 'left':
                $query->leftJoinSub($latestPayments, 'payments', function ($join) {
                    $join->on('students.id', '=', 'payments.student_id');
                });
                break;
            case 'right':
                $query->rightJoinSub($latestPayments, 'payments', function ($join) {
                    $join->on('students.id', '=', 'payments.student_id');
                });
                break;
            case 'inner':
            default:
                $query->joinSub($latestPayments, 'payments', function ($join) {
                    $join->on('students.id', '=', 'payments.student_id');
                });
                break;
        }

        // Menambahkan kondisi status pembayaran jika ada
        if (!is_null($status)) {
            $query->where('payments.status', $operator, $status);
        }

        // Pilih kolom yang diinginkan
        $query->select('students.*', 'payments.status as payment_status', 'payments.created_at as payment_date', 'payments.total_fee');

        return $query->get();
    }
}
