<?php

namespace App\Repositories;

use App\Models\Archivoscontratos;
use InfyOm\Generator\Common\BaseRepository;

class ArchivoscontratosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'archivo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Archivoscontratos::class;
    }
}
