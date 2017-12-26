<?php

namespace App\Repositories;

use App\Models\Subcontratos;
use InfyOm\Generator\Common\BaseRepository;

class SubcontratosRepository extends BaseRepository
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
        return Subcontratos::class;
    }
}
