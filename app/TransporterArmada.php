<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransporterArmada extends Model
{
    protected $table = 'armada_transporter';

    public function driver()
    {
        $this->belongsTo('App\TransporterAccount', 'transporter_akun_id', 'id');
    }

    public function perusahaan()
    {
        $this->belongsTo('App\Transporter', 'transporter_id', 'id');
    }
}
