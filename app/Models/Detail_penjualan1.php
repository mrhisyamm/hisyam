<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Detail_penjualan1
 * @package App\Models
 * @version July 15, 2020, 6:03 am UTC
 *
 * @property \App\Models\Penjualan1 penjualan1s
 * @property \App\Models\Barang barangs
 * @property integer qty
 * @property integer subtotal
 * @property integer penjualan1s_id
 * @property integer barangs_id
 */
class Detail_penjualan1 extends Model
{
    use SoftDeletes;

    public $table = 'detail_penjualan1s';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'qty',
        'subtotal',
        'penjualan1s_id',
        'barangs_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'qty' => 'integer',
        'subtotal' => 'integer',
        'penjualan1s_id' => 'integer',
        'barangs_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'penjualan1s_id' => 'required',
        'barangs_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function penjualan1s()
    {
        return $this->belongsTo(\App\Models\Penjualan1::class, 'penjualan1s_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function barangs()
    {
        return $this->belongsTo(\App\Models\Barang::class, 'barangs_id');
    }
    public function barang($id)
    {
        return \App\Models\Barang::where('id',$id)->first();
    }
}
