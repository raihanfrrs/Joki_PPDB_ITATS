<?php

namespace App\Repositories;

use App\Models\Role;

class RoleRepository
{
    public function all()
    {
        return Role::all();
    }

    public function find($id)
    {
        return Role::find($id);
    }

    public function getRoleByRoleName($roleName)
    {
        return Role::where('role', $roleName)->first();
    }
}
