<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = '123456789';

        DB::table('users')->insert([
        [
            'name' => 'Usuario de prueba',
            'email' => 'prueba@gmail.com',
            'password' => Hash::make($password)
        ],
        [
            'name' => 'Usuario de prueba 2',
            'email' => 'prueba2@gmail.com',
            'password' => Hash::make($password)
        ],
        [
            'name' => 'Usuario de prueba 3',
            'email' => 'prueba3@gmail.com',
            'password' => Hash::make($password)
        ]
        ]);
    }
}
