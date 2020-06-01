<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestAssigned extends Model
{
    protected $table = 'tests_assigned';

    protected $primaryKey = 'id_test';

    protected $fillable = ['id_test', 'id_user', 'solved', 'grade'];

    public function users()
    { //Relación uno a uno del modelo TestAssigned con el modelo User por los id_question
        return $this->hasOne('App\User', 'id', 'id_user');
    }

    public function tests()
    { //Relación uno a uno del modelo Question con el modelo Test por los id_question
        return $this->hasOne('App\Test', 'id_test', 'id_test');
    }

}
