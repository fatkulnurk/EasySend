<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminAccount extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    protected $table = 'akun_easysend';

    protected $fillable = [
        'nama', 'email', 'password', 'role_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [

    ];

    public function role() {
        $this->hasOne('App\Local', 'id', 'role_id');
    }
}
