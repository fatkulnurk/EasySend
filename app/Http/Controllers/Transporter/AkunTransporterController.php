<?php

namespace App\Http\Controllers\Transporter;

use Illuminate\Http\Request;

class AkunTransporterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:transporter');
    }

    public function addAkunTransporter (Request $request)
    {

    }

    public function editAkunTransporter (Request $request)
    {

    }

    public function showAkunTransporter (Request $request)
    {

    }

    public function deleteAkunTransporter (Request $request)
    {

    }
}
