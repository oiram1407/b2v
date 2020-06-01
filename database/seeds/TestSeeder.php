<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert([
        [
            'name_test' => 'Personajes historia mexicana'
        ],[
            'name_test' => 'Jerarquía de Operaciones'
        ],[
            'name_test' => 'Sistemas Operativos'
        ]
        ]);
    }
}
