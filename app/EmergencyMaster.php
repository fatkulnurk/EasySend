<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmergencyMaster extends Model
{
    protected $table = 'emergency_master';

    protected $fillable = ['nama'];

    public function emergencyList()
    {
        $this->hasMany('App\Emergency', 'emergency_id', 'id');
    }
}
