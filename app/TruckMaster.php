<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TruckMaster extends Model
{
    protected $table = 'truck_master';

    public function truck()
    {
        $this->hasMany(TransporterArmada::class, 'jenis_truck', 'id');
    }
}
