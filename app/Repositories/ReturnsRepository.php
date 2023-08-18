<?php

namespace App\Repositories;

use App\Models\Returns;
use App\Repositories\BaseRepository;

/**
 * Class ReturnsRepository
 * @package App\Repositories
 * @version July 10, 2020, 5:19 am UTC
*/

class ReturnsRepository extends BaseRepository
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
        return Returns::class;
    }
}
