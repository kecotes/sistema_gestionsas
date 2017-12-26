<?php

namespace App\Repositories;

use App\Models\Contratosprue;
use InfyOm\Generator\Common\BaseRepository;

class ContratosprueRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'entidadcontratante',
        'estado'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Contratosprue::class;
    }
}
