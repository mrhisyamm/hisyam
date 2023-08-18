<?php

namespace App\Repositories;

use App\Models\Pembelianrs;
use App\Repositories\BaseRepository;

/**
 * Class PembelianrsRepository
 * @package App\Repositories
 * @version July 10, 2020, 8:18 am UTC
*/

class PembelianrsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tempat',
        'tanggal',
        'total',
        'supliers'
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
        return Pembelianrs::class;
    }
}
