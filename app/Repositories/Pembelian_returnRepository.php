<?php

namespace App\Repositories;

use App\Models\Pembelian_return;
use App\Repositories\BaseRepository;

/**
 * Class Pembelian_returnRepository
 * @package App\Repositories
 * @version July 13, 2020, 8:00 am UTC
*/

class Pembelian_returnRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tempat',
        'tanggal',
        'total',
        'supliers_id'
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
        return Pembelian_return::class;
    }
}
