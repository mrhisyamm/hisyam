<?php

namespace App\Repositories;

use App\Models\Detailretunspenjualan;
use App\Repositories\BaseRepository;

/**
 * Class DetailretunspenjualanRepository
 * @package App\Repositories
 * @version July 10, 2020, 7:48 am UTC
*/

class DetailretunspenjualanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'qty',
        'subtotal',
        'penjualans_id',
        'barangs_id',
        'returns_id'
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
        return Detailretunspenjualan::class;
    }
}
