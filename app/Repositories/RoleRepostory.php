<?php

namespace App\Repositories;

use App\Models\Role;

class RoleRepostory
{
    public function all()
    {
        return Role::all();
    }

    public function getRoleByRoleName($roleName)
    {
        return Role::where('role', $roleName)->first();
    }
}
