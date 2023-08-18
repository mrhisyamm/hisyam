<?php

namespace App\Repositories;

use App\Models\Pembelian12;
use App\Repositories\BaseRepository;

/**
 * Class Pembelian12Repository
 * @package App\Repositories
 * @version July 13, 2020, 8:39 am UTC
*/

class Pembelian12Repository extends BaseRepository
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
        return Pembelian12::class;
    }
}
