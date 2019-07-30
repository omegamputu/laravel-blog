<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tags')->insert([
            'name' => 'Framework',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //
        DB::table('tags')->insert([
            'name' => 'WebDesign',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            'name' => 'Marketing',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            'name' => 'eCommerce',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            'name' => 'Wordpress',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            'name' => 'Plugins',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            'name' => 'SEO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
