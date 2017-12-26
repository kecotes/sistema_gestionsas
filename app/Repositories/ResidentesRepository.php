<?php

namespace App\Repositories;

use App\Models\Personas;
use App\Models\Pnaturales;
use InfyOm\Generator\Common\BaseRepository;

class ResidentesRepository extends BaseRepository
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
        return Pnaturales::class;
        return Funcionarios::class;
        return Permisos::class;
    }
}
