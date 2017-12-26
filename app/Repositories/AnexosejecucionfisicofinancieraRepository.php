<?php

namespace App\Repositories;

use App\Models\Anexosejecucionfisicofinanciera;
use InfyOm\Generator\Common\BaseRepository;

class AnexosejecucionfisicofinancieraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Anexosejecucionfisicofinanciera::class;
    }
}
