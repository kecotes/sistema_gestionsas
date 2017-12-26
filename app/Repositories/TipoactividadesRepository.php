<?php

namespace App\Repositories;

use App\Models\Tipoactividades;
use InfyOm\Generator\Common\BaseRepository;

class TipoactividadesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipoactividad'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tipoactividades::class;
    }
}
