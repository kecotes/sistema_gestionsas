<?php

namespace App\Repositories;

use App\Models\Entidadescontratantes;
use InfyOm\Generator\Common\BaseRepository;

class EntidadescontratantesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Entidadescontratantes::class;
    }
}
