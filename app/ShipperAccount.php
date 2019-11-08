<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ShipperAccount extends Authenticatable
{
    use Notifiable;
    protected $table = 'akun_shipper';

    protected $fillable = [
        'nama', 'email', 'password', 'shipper_id', 'role_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [

    ];

    public function infoPerusahaan()
    {
        $this->belongsTo('App\Shipper', 'shipper_id', 'id');
    }
}
