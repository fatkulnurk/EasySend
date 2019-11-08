<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransporterAccount extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    protected $table = 'akun_transporter';

    protected $fillable = [
        'nama', 'email', 'password', 'transporter_id', 'role_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [

    ];

    public function infoPerusahaan()
    {
        $this->belongsTo('App\Transporter', 'transporter_id', 'id');
    }

    public function truck()
    {
        $this->hasOne('App\TransporterArmada', 'transporter_akun_id', 'id');
    }

    public function orderLine()
    {
        $this->hasMany('App\OderLine', 'transporter_akun_id', 'id');
    }

    public function role()
    {
        $this->hasOne('App\Role', 'role_id', 'id');
    }
}
