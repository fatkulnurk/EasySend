<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratJalan extends Model
{
    use SoftDeletes;
    protected $table = 'surat_jalan';

    public function order()
    {
        $this->belongsTo('App\Order', 'order_id', 'id');
    }

    public function orderLine()
    {
        $this->belongsTo('App\OrderLine', 'order_line_id', 'id');
    }

    public function perusahaan()
    {
        $this->belongsTo('App\Transporter', 'transporter_id', 'id');
    }

    public function pemesan()
    {
        $this->belongsTo('App\Shipper', 'shipper_id', 'id');
    }

    public function driver()
    {
        $this->belongsTo('App\TransporterAccount', 'transporter_akun_id', 'id');
    }

    public function truck()
    {
        $this->belongsTo('App\TransporterArmada', 'armada_id', 'id');
    }
}
