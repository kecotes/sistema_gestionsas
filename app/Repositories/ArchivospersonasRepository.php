<?php

namespace App\Repositories;

use App\Models\Archivospersonas;
use InfyOm\Generator\Common\BaseRepository;

class ArchivospersonasRepository extends BaseRepository
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
        return Archivospersonas::class;
    }
}
