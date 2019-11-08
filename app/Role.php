<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;
    protected $table = 'role';

    public function admin()
    {
        $this->belongsTo('App\Admin', 'id', 'role_id');
    }

    public function shipper()
    {
        $this->belongsTo('App\Shipper', 'id', 'role_id');
    }

    public function transporter()
    {
        $this->belongsTo('App\Transporter', 'id', 'role_id');
    }

    public function role() {
        $this->hasOne('App\Local', 'id', 'role_id');
    }
}
