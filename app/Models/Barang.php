<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Barang
 * @package App\Models
 * @version February 20, 2020, 9:09 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection detailPembelians
 * @property \Illuminate\Database\Eloquent\Collection detailPenjualans
 * @property string nama
 * @property integer stok
 * @property integer satuan
 * @property integer harga_beli
 * @property integer harga
 
 */
class Barang extends Model
{
    use SoftDeletes;

    public $table = 'barangs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'gambar',
        'nama',
        'deskripsi',
        'stok',
        'satuan',
        'harga_beli',
        'harga',
        'harga_diskon',
        'status',
        'id_kategori'
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */


    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function detailPembelians()
    {
        return $this->hasMany(\App\Models\DetailPembelian::class, 'barangs_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function detailPenjualans()
    {
        return $this->hasMany(\App\Models\DetailPenjualan::class, 'barangs_id');
    }

    public function pesanan_details()
    {
        return $this->hasMany(\App\Models\Pesanan_Detail::class, 'barang_id');
    }

    public function Kategori()
    {
        return $this->belongsTo('App\Models\Kategori','id_kategori','id');
    }
}
