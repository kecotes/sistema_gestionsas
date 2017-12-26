<?php

namespace App\Repositories;

use App\Models\Funcionarios;
use InfyOm\Generator\Common\BaseRepository;

class FuncionariosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Funcionarios::class;
    }
}
