<?php

namespace App\Repositories;

use App\Models\Anexosfisicofinanciera;
use InfyOm\Generator\Common\BaseRepository;

class AnexosfisicofinancieraRepository extends BaseRepository
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
        return Anexosfisicofinanciera::class;
    }
}
