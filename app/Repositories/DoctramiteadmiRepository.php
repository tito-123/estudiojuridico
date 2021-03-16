<?php

namespace App\Repositories;

use App\Models\Doctramiteadmi;
use App\Repositories\BaseRepository;

/**
 * Class DoctramiteadmiRepository
 * @package App\Repositories
 * @version March 16, 2021, 9:38 am UTC
*/

class DoctramiteadmiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'tipo',
        'clase',
        'documento',
        'idtramiteadmi'
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
        return Doctramiteadmi::class;
    }
}
