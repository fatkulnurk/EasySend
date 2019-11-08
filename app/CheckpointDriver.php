<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckpointDriver extends Model
{
    protected $table = 'checkpoint_driver';

    public function checkpoint()
    {
        $this->belongsTo('App\CheckpointRuteOrder', 'checkpoint_rute_order_id', 'id');
    }

    public function suratJalan()
    {
        $this->belongsTo(CheckpointRuteOrder::class, 'surat_jalan_id', 'id');
    }
}
