<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pembayaran_Air extends Model
{
    use SoftDeletes;

    protected $table = "pembayaran_air";

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $fillable = ['no_ref','tanggal','instansi','nama_kepemilikan','keterangan','jumlah_bayar'];
}
