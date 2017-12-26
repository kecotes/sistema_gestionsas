<?php

namespace App\Repositories;

use App\Models\Numuniones;
use InfyOm\Generator\Common\BaseRepository;

class NumunionesRepository extends BaseRepository
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
        return Numuniones::class;
    }
}
