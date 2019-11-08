<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    protected $table = 'order';

    public function orderLine()
    {
        $this->hasMany('App\OrderLine', 'order_id', 'id');
    }

    public function suratJalan()
    {
        $this->hasMany('App\SuratJalan', 'order_id', 'id');
    }

    public function shipper()
    {
        $this->belongsTo('App\Shipper', 'shipper_id', 'id');
    }

    public function shipperAkun()
    {
        $this->belongsTo('App\ShipperAccount', 'shipper_akun_id', 'id');
    }
}
