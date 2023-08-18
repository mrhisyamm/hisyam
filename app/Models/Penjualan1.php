<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Penjualan1
 * @package App\Models
 * @version July 15, 2020, 6:02 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection detailPenjualan1s
 * @property string tanggal
 * @property integer pembayaran
 * @property integer total
 */
class Penjualan1 extends Model
{
    use SoftDeletes;

    public $table = 'penjualan1s';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tanggal',
        'pembayaran',
        'total'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tanggal' => 'date',
        'pembayaran' => 'integer',
        'total' => 'integer'
    ];

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
    public function detailPenjualan1s()
    {
        return $this->hasMany(\App\Models\Detail_penjualan1::class, 'penjualan1s_id');
    }


    public function detail_penjualan1(){
     return $this->hasMany(\App\Models\Detail_penjualan1::class,'penjualan1s_id','id');
    }
}
