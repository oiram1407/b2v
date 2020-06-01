<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
  protected $table = 'questions';

  protected $primaryKey = 'id_question';

  protected $fillable = ['id_test', 'question_text'];

  public function option()
  {   //Relación uno a uno del modelo Question con el modelo Option por los id_question
      return $this->hasOne('App\Option', 'id_question', 'id_question');
  }

}
