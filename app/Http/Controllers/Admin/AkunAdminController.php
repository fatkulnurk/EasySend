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

    }

    public function editAkunAdmin (Request $request)
    {

    }

    public function showAkunAdmin (Request $request)
    {

    }

    public function deleteAkunAdmin (Request $request)
    {

    }
}
