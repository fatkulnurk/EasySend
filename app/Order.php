<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    public function orderLine()
    {
        $this->hasMany('App\OrderLine', 'order_id', 'id');
    }

    public function suratJalan()
    {
        $this->hasMany('App\SuratJalan', 'order_id', 'id');
    }
}
