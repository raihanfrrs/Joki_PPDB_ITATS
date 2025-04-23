<?php

namespace App\Repositories;

use Ramsey\Uuid\Uuid;
use App\Models\SchoolFee;
use Illuminate\Support\Facades\DB;

class SchoolFeeRepository
{
    public function all()
    {
        return SchoolFee::all();
    }

    public function store($data)
    {
        return DB::transaction(function () use ($data) {
            return SchoolFee::create([
                'id' => Uuid::uuid4()->toString(),
                'form' => $data->form,
                'development_fund' => $data->development_fund,
                'education_development_donation' => $data->education_development_donation,
                'batik_uniform' => $data->batik_uniform,
                'scout_uniform' => $data->scout_uniform,
                'total_fee' => (
                    $data->form +
                    $data->development_fund +
                    $data->education_development_donation +
                    $data->batik_uniform +
                    $data->scout_uniform
                )
            ]);
        });
    }
}
