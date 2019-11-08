<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class TransporterAccount extends Authenticatable
{
    use Notifiable;
    protected $table = 'akun_transporter';

    protected $fillable = [
        'nama', 'email', 'password', 'transporter_id', 'role_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [

    ];
}
