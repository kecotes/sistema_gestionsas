<?php

namespace App\Repositories;

use App\Models\Contratos;
use InfyOm\Generator\Common\BaseRepository;

class ContratosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'entidadcontratante',
        'estado'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Contratos::class;
    }
}
