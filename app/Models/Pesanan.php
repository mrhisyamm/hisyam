<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pesanan extends Model
{
    use SoftDeletes;

    public $table = 'pesanan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'customer_id',
        'tanggal',
        'status',
        'size',
        'jumlah_harga'
        
        
    ];

    public function Customer()
    {
        return $this->belongsTo('App\Models\Customer','customer_id','id');
    }
}