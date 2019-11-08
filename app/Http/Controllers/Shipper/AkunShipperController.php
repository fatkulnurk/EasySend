<?php

namespace App\Http\Controllers\Shipper;

use Illuminate\Http\Request;

class AkunShipperController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:shipper');
    }

    public function addAkunShipper (Request $request)
    {

    }

    public function editAkunShipper (Request $request)
    {

    }

    public function showAkunShipper (Request $request)
    {

    }

    public function deleteAkunShipper (Request $request)
    {

    }
}
