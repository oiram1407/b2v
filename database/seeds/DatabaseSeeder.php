<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        $this->call([
          AdminSeeder::class,
          OptionSeeder::class,
          QuestionSeeder::class,
          ResultSeeder::class,
          TestAssignedSeeder::class,
          TestSeeder::class,
          UserSeeder::class,
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
