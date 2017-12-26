<?php

namespace App\Repositories;

use App\Models\Actividadescontratos;
use InfyOm\Generator\Common\BaseRepository;

class ActividadescontratosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'estado'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Actividadescontratos::class;
    }
}
