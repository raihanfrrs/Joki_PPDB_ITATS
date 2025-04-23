<?php

namespace App\Repositories;

use App\Models\SchoolFee;

class SchoolFeeRepository
{
    public function all()
    {
        return SchoolFee::all();
    }
}
