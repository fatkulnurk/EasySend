<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    protected $table = 'shipper';

    public function order()
    {
        $this->hasMany('App\Order', 'shipper_id', 'id');
    }

    public function suratJalan()
    {
        $this->hasMany('App\SuratJalan', 'shipper_id', 'id');
    }

    public function pegawai()
    {
        $this->hasMany('App\ShipperAccount', 'shipper_id', 'id');
    }
}
