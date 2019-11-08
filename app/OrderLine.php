<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{
    protected $table = 'order_line';

    public function order()
    {
        $this->belongsTo('App\Order', 'order_id', 'id');
    }

    public function suratJalan()
    {
        $this->hasMany('App\SuratJalan', 'order_line_id', 'id');
    }
}
