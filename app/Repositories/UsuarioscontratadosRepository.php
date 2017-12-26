<?php

namespace App\Repositories;

use App\Models\Usuarioscontratados;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UsuarioscontratadosRepository
 * @package App\Repositories
 * @version December 15, 2017, 3:44 pm UTC
 *
 * @method Usuarioscontratados findWithoutFail($id, $columns = ['*'])
 * @method Usuarioscontratados find($id, $columns = ['*'])
 * @method Usuarioscontratados first($columns = ['*'])
*/
class UsuarioscontratadosRepository extends BaseRepository
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
        return Usuarioscontratados::class;
    }
}
