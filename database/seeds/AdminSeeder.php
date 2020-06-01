<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = 'adm123456789';

        DB::table('admins')->insert([
            'name' => 'Admin de prueba',
            'email' => 'pruebaadm@gmail.com',
            'password' => Hash::make($password)
        ]);
    }
}
