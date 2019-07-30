<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'John',
            'email' => 'johndoe@gmail.fr',
            'password' => bcrypt('password'),
            'admin' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
