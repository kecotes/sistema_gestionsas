<?php

namespace App\Repositories;

use App\Models\Ejecucionfisicofinanciera;
use InfyOm\Generator\Common\BaseRepository;

class EjecucionfisicofinancieraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'item',
        'tema',
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ejecucionfisicofinanciera::class;
    }
}
