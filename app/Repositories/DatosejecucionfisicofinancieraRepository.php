<?php

namespace App\Repositories;

use App\Models\Datosejecucionfisicofinanciera;
use InfyOm\Generator\Common\BaseRepository;

class DatosejecucionfisicofinancieraRepository extends BaseRepository
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
        return Datosejecucionfisicofinanciera::class;
    }
}
