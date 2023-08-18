<?php

namespace App\Repositories;

use App\Models\Return;
use App\Repositories\BaseRepository;

/**
 * Class ReturnRepository
 * @package App\Repositories
 * @version July 10, 2020, 4:18 am UTC
*/

class ReturnRepository extends BaseRepository
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
        return Return::class;
    }
}
