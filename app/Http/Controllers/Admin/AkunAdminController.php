<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\AdminAccount;

class AkunAdminController extends Controller
{
    public function __construct ()
    {
        $this->middleware('auth:admin');
    }

    public function addAkunAdmin (Request $request)
    {
        $akun = new AdminAccount();

        $akun->nama = $request->nama;
        $akun->email = $request->email;
        $akun->password = Hash::make($request->password);
        $akun->role_id = $request->role;

        try {
            $akun->save();
            return response()->json();
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

    public function editAkunAdmin (Request $request)
    {
        try {
            $akun = AdminAccount::findOrFail($request->admin);

            $akun->nama = $request->nama;
            $akun->email = $request->email;
            $akun->password = Hash::make($request->password);
            $akun->role_id = $request->role;

            $akun->save();
            return response()->json();
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

    public function showAkunAdmin (Request $request)
    {
        $akun = AdminAccount::with('role')->all();
        return response()->json($akun);
    }

    public function deleteAkunAdmin (Request $request)
    {
        try {
            if(AdminAccount::destroy($request->admin))
            {
                return response()->json();
            }else{
                // return response()->json(,500);
            }
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}
