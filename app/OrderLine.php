<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderLine extends Model
{
    use SoftDeletes;
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
