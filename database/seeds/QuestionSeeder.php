<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
        [
            'id_test' => 1,
            'question_text' => '¿Quién no es un heroe de la indepencia mexicana?'
        ],[
            'id_test' => 2,
            'question_text' => 'Dada 4+3X5, ¿Cuál es el resultado?'
        ],[
            'id_test' => 3,
            'question_text' => '¿Cuál de las siguientes opciones es un sistema operativo?'
        ]
        ]);
    }
}
