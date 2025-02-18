<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminSettingUpdateRequest;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function setting_index()
    {
        return view('pages.admin.profile.settings.index');
    }

    public function setting_update(AdminSettingUpdateRequest $request)
    {

    }
}
