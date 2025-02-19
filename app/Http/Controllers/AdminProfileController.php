<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Http\Requests\AdminSettingUpdateRequest;

class AdminProfileController extends Controller
{
    protected $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function setting_index()
    {
        return view('pages.admin.profile.settings.index');
    }

    public function setting_update(AdminSettingUpdateRequest $request)
    {
        if ($this->user->updateProfileByRole($request)) {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Pengaturan Berhasil Diubah!'
            ]);
        } else {
            return redirect()->back()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Pengaturan Gagal Diubah!'
            ]);
        }
    }
}
