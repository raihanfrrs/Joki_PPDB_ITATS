<?php

namespace App\Repositories;

use App\Models\Timer;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\DB;

class TimerRepository
{
    public function store($data)
    {
        return DB::transaction(function () use ($data) {
            Timer::create([
                'id' => Uuid::uuid4()->toString(),
                'begin_at' => $data['begin_at'],
                'end_at' => $data['end_at'],
            ]);

            return true;
        });
    }
}
