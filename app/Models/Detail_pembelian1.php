<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Detail_pembelian1
 * @package App\Models
 * @version July 13, 2020, 8:58 am UTC
 *
 * @property \App\Models\Barang barangs
 * @property integer subtotal
 * @property integer pembelians1_id
 * @property integer barangs_id
 * @property integer qty
 */
class Detail_pembelian1 extends Model
{
    use SoftDeletes;

    public $table = 'detail_pembelian1s';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'subtotal',
        'pembelians1_id',
        'barangs_id',
        'qty'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'subtotal' => 'integer',
        'pembelians1_id' => 'integer',
        'barangs_id' => 'integer',
        'qty' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'subtotal' => 'required',
        'pembelians1_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
   
    public function pembelians1()
    {
        return $this->belongsTo(\App\Models\Pembelian1::class, 'pembelians1_id');
    }
    public function barangs($id)
    {
        return \App\Models\Barang::where('id',$id)->first();
    }
}
