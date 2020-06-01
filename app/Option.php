<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $table = 'options';

    protected $primaryKey = 'id_op';

    protected $fillable = ['id_question', 'op_a', 'op_b', 'op_c', 'correct_op'];
}
