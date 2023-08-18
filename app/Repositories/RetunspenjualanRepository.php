<?php

namespace App\Repositories;

use App\Models\Retunspenjualan;
use App\Repositories\BaseRepository;

/**
 * Class RetunspenjualanRepository
 * @package App\Repositories
 * @version July 10, 2020, 7:50 am UTC
*/

class RetunspenjualanRepository extends BaseRepository
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
        return Retunspenjualan::class;
    }
}
