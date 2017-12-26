<?php

namespace App\Repositories;

use App\Models\Polizas;
use InfyOm\Generator\Common\BaseRepository;

class PolizasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fechaexpedicion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Polizas::class;
    }
}
