<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'Javascript',
            'slug' => 'javascript',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //
        DB::table('categories')->insert([
            'name' => 'Laravel',
            'slug' => 'laravel',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //
        DB::table('categories')->insert([
            'name' => 'Online Security',
            'slug' => 'online-security',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //
        DB::table('categories')->insert([
            'name' => 'Astuces',
            'slug' => 'astuces',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => 'Internet Marketing',
            'slug' => 'internet-marketing',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
