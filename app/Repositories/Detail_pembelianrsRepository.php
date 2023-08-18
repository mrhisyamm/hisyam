<?php

namespace App\Repositories;

use App\Models\Detail_pembelianrs;
use App\Repositories\BaseRepository;

/**
 * Class Detail_pembelianrsRepository
 * @package App\Repositories
 * @version July 10, 2020, 8:22 am UTC
*/

class Detail_pembelianrsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tempat',
        'tanggal',
        'total',
        'supliers',
        'returns_pembelians_id'
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
        return Detail_pembelianrs::class;
    }
}
