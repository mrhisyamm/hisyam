<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pembayaran_Listrik extends Model
{
    use SoftDeletes;

    protected $table = "pembayaran_listrik";

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $fillable = ['no_tujuan','keterangan','tanggal','token','jumlah_bayar'];
}
