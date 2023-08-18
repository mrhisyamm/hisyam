<?php

namespace App\Repositories;

use App\Models\Detail_pembelian1;
use App\Repositories\BaseRepository;

/**
 * Class Detail_pembelian1Repository
 * @package App\Repositories
 * @version July 13, 2020, 8:58 am UTC
*/

class Detail_pembelian1Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'subtotal',
        'pembelians1_id',
        'barangs_id',
        'qty'
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
        return Detail_pembelian1::class;
    }
}
