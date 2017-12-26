<?php

namespace App\Repositories;

use App\Models\Tiposcontratos;
use InfyOm\Generator\Common\BaseRepository;

class TiposcontratosRepository extends BaseRepository
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
        return Tiposcontratos::class;
    }
}
