<?php

namespace App\Repositories;

use App\Models\Pnaturales;
use InfyOm\Generator\Common\BaseRepository;

class PnaturalesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pnaturales::class;
    }
}
