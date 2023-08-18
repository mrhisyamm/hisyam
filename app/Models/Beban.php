<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Beban extends Model
{
    use SoftDeletes;

    public $table = 'beban';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $fillable =[
        'keterangan',
        'harga',
        'tanggal'
    ];
}
