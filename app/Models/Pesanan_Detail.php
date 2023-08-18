<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pesanan_Detail extends Model
{
    use SoftDeletes;

    public $table = 'pesanan_details';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'barang_id',
        'pesanan_id',
        'jumlah',
        'jumlah_harga',
        'layanan',
        'service',
        'value',
        'etd',
        'status_pembayaran',
        'b_pembayaran'
        
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'barang_id' => 'integer',
        'pesanan_id' => 'integer',
        'jumlah' => 'integer',
        'jumlah_harga' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'barang_id' => 'required',
        'pesanan_id' => 'required'
    ];

/**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/

    public function barangs()
    {
        return $this->belongsTo(\App\Models\Barang::class, 'barang_id');
    }
    

    public function Pesanan()
    {
        return $this->belongsTo(\App\Models\Pesanan::class, 'pesanan_id');
    }
}