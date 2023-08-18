<?php

namespace App\Repositories;

use App\Models\Returns_pembelians;
use App\Repositories\BaseRepository;

/**
 * Class Returns_pembeliansRepository
 * @package App\Repositories
 * @version July 10, 2020, 5:11 am UTC
*/

class Returns_pembeliansRepository extends BaseRepository
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
        return Returns_pembelians::class;
    }
}
