<?php

namespace App\Repositories;

use App\Models\Novedadesfechas;
use InfyOm\Generator\Common\BaseRepository;

class NovedadesfechasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'plazoinicial',
        'fechainiciacion',
        'fechafinalizacion',
        'fechasuspension',
        'fechareinicio',
        'adicciontiempo',
        'fechafinalizacionadiccion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Novedadesfechas::class;
    }
}
