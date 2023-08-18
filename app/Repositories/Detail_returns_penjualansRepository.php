<?php

namespace App\Repositories;

use App\Models\Detail_returns_penjualans;
use App\Repositories\BaseRepository;

/**
 * Class Detail_returns_penjualansRepository
 * @package App\Repositories
 * @version July 10, 2020, 5:22 am UTC
*/

class Detail_returns_penjualansRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tanggal',
        'pembayaran',
        'total',
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
        return Detail_returns_penjualans::class;
    }
}
