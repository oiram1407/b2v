<?php

use Illuminate\Database\Seeder;

class TestAssignedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tests_assigned')->insert([
        [
          'id_test' => 1,
          'id_user' => 1,
          'solved' => 1,
          'grade' => 10.00
      ],[
          'id_test' => 2,
          'id_user' => 1,
          'solved' => 0,
          'grade' => 0
      ],[
          'id_test' => 1,
          'id_user' => 2,
          'solved' => 1,
          'grade' => 0
      ]
      ]);
    }
}
