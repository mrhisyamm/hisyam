<?php

namespace App\Repositories;

use App\Models\Penjualanrs;
use App\Repositories\BaseRepository;

/**
 * Class PenjualanrsRepository
 * @package App\Repositories
 * @version July 10, 2020, 8:19 am UTC
*/

class PenjualanrsRepository extends BaseRepository
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
        return Penjualanrs::class;
    }
}
