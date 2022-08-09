<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 *
 * @property $id
 * @property $usuario_id
 * @property $nombre
 * @property $apellido
 * @property $semestre
 * @property $email
 * @property $genero
 * @property $telefono
 * @property $programa
 * @property $universidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiante extends Model
{
    
    static $rules = [
		'usuario_id' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'semestre' => 'required',
		'email' => 'required',
		'genero' => 'required',
		'telefono' => 'required',
		'programa' => 'required',
		'universidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['usuario_id','nombre','apellido','semestre','email','genero','telefono','programa','universidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'usuario_id');
    }
    

}
