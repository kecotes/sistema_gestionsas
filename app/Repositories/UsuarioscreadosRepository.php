<?php

namespace App\Repositories;

use App\Models\Usuarioscreados;
use InfyOm\Generator\Common\BaseRepository;

class UsuarioscreadosRepository extends BaseRepository
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
        return Usuarioscreados::class;
    }
}
