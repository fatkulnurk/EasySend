<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Emergency extends Model
{
    use SoftDeletes;
    protected $table = 'emergency';

    public function suratJalan()
    {
        $this->belongsTo('App\SuratJalan', 'surat_jalan_id', 'id');
    }

    public function emergencyType()
    {
        $this->belongsTo('App\EmergencyMaster', 'emergency_id', 'id');
    }
}
