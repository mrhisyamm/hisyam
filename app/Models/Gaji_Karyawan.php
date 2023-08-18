<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gaji_Karyawan extends Model
{
    use SoftDeletes;

    protected $table = "gaji_karyawan";

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $fillable = ['nama_karyawan','gaji','tanggal','keterangan'];
}
