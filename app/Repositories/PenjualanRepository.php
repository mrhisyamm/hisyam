<?php

namespace App\Repositories;

use App\Models\Penjualan;
use App\Repositories\BaseRepository;

/**
 * Class PenjualanRepository
 * @package App\Repositories
 * @version December 9, 2019, 1:07 am UTC
*/

class PenjualanRepository extends BaseRepository
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
        return Penjualan::class;
    }
}
