<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransporterArmada extends Model
{
    use SoftDeletes;
    protected $table = 'armada_transporter';

    public function driver()
    {
        $this->belongsTo('App\TransporterAccount', 'transporter_akun_id', 'id');
    }

    public function perusahaan()
    {
        $this->belongsTo('App\Transporter', 'transporter_id', 'id');
    }

    public function jenis()
    {
        $this->belongsTo(TruckMaster::class, 'jenis_truck', 'id');
    }
}
