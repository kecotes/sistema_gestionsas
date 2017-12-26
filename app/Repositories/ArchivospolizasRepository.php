<?php

namespace App\Repositories;

use App\Models\Archivospolizas;
use InfyOm\Generator\Common\BaseRepository;

class ArchivospolizasRepository extends BaseRepository
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
        return Archivospolizas::class;
    }
}
