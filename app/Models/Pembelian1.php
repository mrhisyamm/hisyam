<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pembelian1
 * @package App\Models
 * @version July 13, 2020, 8:41 am UTC
 *
 * @property \App\Models\Suplier supliers
 * @property string tempat
 * @property string tanggal
 * @property integer total
 * @property integer supliers_id
 */
class Pembelian1 extends Model
{
    use SoftDeletes;

    public $table = 'pembelian1s';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tempat',
        'tanggal',
        'total',
        'supliers_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tempat' => 'string',
        'tanggal' => 'date',
        'total' => 'integer',
        'supliers_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function supliers()
    {
        return $this->belongsTo(\App\Models\Suplier::class, 'supliers_id');
    }
    public function detailPembelians1()
    {
        return $this->hasMany(\App\Models\Detail_pembelian1::class, 'pembelians1_id');
    }
}
