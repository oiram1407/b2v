<?php

use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
        [
            'id_question' => 1,
            'op_a' => 'Miguel Hidalgo',
            'op_b' => 'Porfirio Diaz',
            'op_c' => 'Joséfa Ortiz de Dominguez',
            'correct_op' => 'b',
        ],[
            'id_question' => 2,
            'op_a' => '5',
            'op_b' => '0',
            'op_c' => '19',
            'correct_op' => 'c',
        ],[
            'id_question' => 3,
            'op_a' => 'PHP',
            'op_b' => 'Github',
            'op_c' => 'Linux',
            'correct_op' => 'c',
        ]
        ]);
    }
}
