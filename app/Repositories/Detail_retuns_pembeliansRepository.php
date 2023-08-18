<?php

namespace App\Repositories;

use App\Models\Detail_retuns_pembelians;
use App\Repositories\BaseRepository;

/**
 * Class Detail_retuns_pembeliansRepository
 * @package App\Repositories
 * @version July 10, 2020, 5:08 am UTC
*/

class Detail_retuns_pembeliansRepository extends BaseRepository
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
        return Detail_retuns_pembelians::class;
    }
}
