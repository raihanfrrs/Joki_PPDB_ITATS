<?php

namespace App\Repositories;

use App\Models\Timer;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\DB;

class TimerRepository
{
    public function getTimer()
    {
        return Timer::first();
    }

    public function store($data)
    {
        return DB::transaction(function () use ($data) {
            if (self::getTimer()) {
                Timer::where('id', self::getTimer()->id)->update([
                    'begin_at' => $data['begin_at'],
                    'end_at' => $data['end_at'],
                ]);
            } else {
                Timer::create([
                    'id' => Uuid::uuid4()->toString(),
                    'begin_at' => $data['begin_at'],
                    'end_at' => $data['end_at'],
                ]);
            }

            return true;
        });
    }

    public function destroy()
    {
        return DB::transaction(function () {
            Timer::where('id', self::getTimer()->id)->delete();
            return true;
        });
    }
}
