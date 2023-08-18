<?php

namespace App\Repositories;

use App\Models\Detail_return;
use App\Repositories\BaseRepository;

/**
 * Class Detail_returnRepository
 * @package App\Repositories
 * @version July 13, 2020, 8:02 am UTC
*/

class Detail_returnRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'subtotal',
        'pembelianrs_id',
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
        return Detail_return::class;
    }
}
