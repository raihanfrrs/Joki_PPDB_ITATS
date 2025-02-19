<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrincipleSettingUpdateRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class PrincipleProfileController extends Controller
{
    protected $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function setting_index()
    {
        return view('pages.principle.profile.settings.index');
    }


    public function setting_update(PrincipleSettingUpdateRequest $request)
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
