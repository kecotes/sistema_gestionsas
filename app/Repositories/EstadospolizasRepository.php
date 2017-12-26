<?php

namespace App\Repositories;

use App\Models\Estadospolizas;
use InfyOm\Generator\Common\BaseRepository;

class EstadospolizasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'vigenciadesde',
        'vigenciahasta'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Estadospolizas::class;
    }
}
