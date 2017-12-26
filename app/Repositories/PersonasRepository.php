<?php

namespace App\Repositories;

use App\Models\Personas;
use InfyOm\Generator\Common\BaseRepository;

class PersonasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'direccion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Personas::class;
    }
}
