<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    protected $table = 'emergency';

    public function suratJalan()
    {
        $this->belongsTo('App\SuratJalan', 'surat_jalan_id', 'id');
    }
}
