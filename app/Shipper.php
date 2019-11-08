<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shipper extends Model
{
    use SoftDeletes;
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
