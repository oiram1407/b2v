<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'tests';

    protected $primaryKey = 'id_test';

    protected $fillable = ['name_test'];

}
