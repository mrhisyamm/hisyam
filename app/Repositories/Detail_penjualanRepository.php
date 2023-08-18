<?php

namespace App\Repositories;

use App\Models\Detail_Penjualan;
use App\Repositories\BaseRepository;

/**
 * Class Detail_PenjualanRepository
 * @package App\Repositories
 * @version December 9, 2019, 6:14 am UTC
*/

class Detail_PenjualanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'qty',
        'subtotal',
        'penjualans_id',
        'barangs_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Detail_Penjualan::class;
    }
}
