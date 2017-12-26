<?php

namespace App\Repositories;

use App\Models\Archivosactividadescontratos;
use InfyOm\Generator\Common\BaseRepository;

class ArchivosactividadescontratosRepository extends BaseRepository
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
        return Archivosactividadescontratos::class;
    }
}
