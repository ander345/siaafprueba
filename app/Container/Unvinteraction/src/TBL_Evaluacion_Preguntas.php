<?php

namespace App\Container\Unvinteraction\src;

use Illuminate\Database\Eloquent\Model;

class TBL_Evaluacion_Preguntas extends Model
{
    //
    public $timestamps = false;
    protected $connection = 'unvinteraction';
    protected $table = 'TBL_Evaluacion_Preguntas';
    protected $primaryKey = 'PK_Evaluacion_Preguntas';
    protected $fillable = ['Puntuacion','FK_TBL_Evaluacion','FK_TBL_Preguntas'];
    public function evaluacion_Preguntas()
    {
        return $this->belongsto(TBL_Evaluacion::class, 'FK_TBL_Evaluacion', 'PK_Evaluacion');
    }
    public function preguntas_Preguntas()
    {
        return $this->belongsto(TBL_Preguntas::class, 'FK_TBL_Preguntas', 'PK_Preguntas');
    }
}
