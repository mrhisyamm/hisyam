<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Detail_Penjualan
 * @package App\Models
 * @version December 9, 2019, 6:14 am UTC
 *
 * @property \App\Models\Barang barangs
 * @property \App\Models\Penjualan penjualans
 * @property integer qty
 * @property integer subtotal
 * @property integer penjualans_id
 * @property integer barangs_id
 */
class Detail_Penjualan extends Model
{
    use SoftDeletes;

    public $table = 'detail_penjualans';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'qty',
        'subtotal',
        'penjualans_id',
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
        'penjualans_id' => 'integer',
        'barangs_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'penjualans_id' => 'required',
        'barangs_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function barang($id)
    {
        return \App\Models\Barang::where('id',$id)->first();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function penjualans()
    {
        return $this->belongsTo(\App\Models\Penjualan::class, 'penjualans_id');
    }
}
