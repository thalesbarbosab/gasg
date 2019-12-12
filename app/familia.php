<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class familia extends Model
{
    protected $table = 'familias';
    public function programa_social(){
        return $this->belongsTo('App\programa_social', 'id_programa');
    }
}
