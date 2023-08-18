<?php

namespace App\Repositories;

use App\Models\Detailpembelianrs;
use App\Repositories\BaseRepository;

/**
 * Class DetailpembelianrsRepository
 * @package App\Repositories
 * @version July 10, 2020, 8:21 am UTC
*/

class DetailpembelianrsRepository extends BaseRepository
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
        return Detailpembelianrs::class;
    }
}
