<?php

namespace App\Repositories;

use App\Models\Unionestemporales;
use InfyOm\Generator\Common\BaseRepository;

class UnionestemporalesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'porcentaje'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Unionestemporales::class;
    }
}
