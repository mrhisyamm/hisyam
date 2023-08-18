<?php

namespace App\Repositories;

use App\Models\Penjualan1;
use App\Repositories\BaseRepository;

/**
 * Class Penjualan1Repository
 * @package App\Repositories
 * @version July 15, 2020, 6:02 am UTC
*/

class Penjualan1Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tanggal',
        'pembayaran',
        'total'
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
        return Penjualan1::class;
    }
}
