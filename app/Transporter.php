<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transporter extends Model
{
    protected $table = 'transporter';

    public function orderLine()
    {
        $this->hasMany('App\OrderLine', 'transporter_id', 'id');
    }

    public function suratJalan()
    {
        $this->hasMany('App\SuratJalan', 'transporter_id', 'id');
    }

    public function pegawai()
    {
        $this->hasMany('App\TransporterAccount', 'transporter_id', 'id');
    }

    public function armada()
    {
        $this->hasMany('App\TransporterArmada', 'transporter_id', 'id');
    }
}
