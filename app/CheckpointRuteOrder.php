<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckpointRuteOrder extends Model
{
    protected $table = 'checkpoint';

    public function sebelum()
    {
        $this->hasOne('App\CheckpointRuteOrder', 'id', 'checkpoint_id_sebelum');
    }

    public function sesudah()
    {
        $this->hasOne('App\CheckpointRuteOrder', 'id', 'checkpoint_id_sesudah');
    }

    public function order()
    {
        $this->belongsTo(Order::class, 'order_id', 'id');
    }
}
