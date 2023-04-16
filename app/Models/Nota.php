<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Nota
 *
 * @property $id
 * @property $nota_1
 * @property $nota_2
 * @property $nota_3
 * @property $promedio
 * @property $profesor_id
 * @property $alumno_id
 * @property $materia_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno $alumno
 * @property Materia $materia
 * @property Profesore $profesore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Nota extends Model
{
    
    static $rules = [
		'nota_1' => 'required',
		'nota_2' => 'required',
		'nota_3' => 'required',
		// 'promedio' => 'required',
		// 'profesor_id' => 'required',
		'alumno_id' => 'required',
		'materia_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    // protected $fillable = ['nota_1','nota_2','nota_3','promedio','profesor_id','alumno_id','materia_id'];
    protected $fillable = ['nota_1','nota_2','nota_3','promedio','alumno_id','materia_id','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function alumno()
    {
        return $this->hasOne('App\Models\Alumno', 'id', 'alumno_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function materia()
    {
        return $this->hasOne('App\Models\Materia', 'id', 'materia_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profesore()
    {
        return $this->hasOne('App\Models\Profesore', 'id', 'profesor_id');
    }
    

}
