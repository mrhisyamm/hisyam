<?php

namespace App\Repositories;

use App\Models\Detail_penjualan1;
use App\Repositories\BaseRepository;

/**
 * Class Detail_penjualan1Repository
 * @package App\Repositories
 * @version July 15, 2020, 6:03 am UTC
*/

class Detail_penjualan1Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'qty',
        'subtotal',
        'penjualan1s_id',
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
        return Detail_penjualan1::class;
    }
}
