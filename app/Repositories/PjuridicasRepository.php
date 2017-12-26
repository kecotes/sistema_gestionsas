<?php

namespace App\Repositories;

use App\Models\Pjuridicas;
use InfyOm\Generator\Common\BaseRepository;

class PjuridicasRepository extends BaseRepository
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
        return Pjuridicas::class;
    }
}
