<?php

namespace App\Repositories;

use App\Models\Pembelian1;
use App\Repositories\BaseRepository;

/**
 * Class Pembelian1Repository
 * @package App\Repositories
 * @version July 13, 2020, 8:41 am UTC
*/

class Pembelian1Repository extends BaseRepository
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
        return Pembelian1::class;
    }
}
