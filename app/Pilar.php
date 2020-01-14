<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pergunta;

class Pilar extends Model
{
    protected $table = 'pilares';

    public function perguntas()
    {
        return $this->hasMany('App\Pergunta');
    }
}
