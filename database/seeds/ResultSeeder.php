<?php

use Illuminate\Database\Seeder;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('results')->insert([
      [
          'id_question' => 1,
          'id_user' => 1,
          'response' => 'b',
          'correct' => 1
      ],[
          'id_question' => 2,
          'id_user' => 1,
          'response' => 'b',
          'correct' => 0
      ],[
          'id_question' => 3,
          'id_user' => 2,
          'response' => 'a',
          'correct' => 0
      ]
      ]);
    }
}
