<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{

    private function randDate()
    {
        return Carbon::createFromDate(null, rand(1,12), rand(1,28));
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $date = $this->randDate();

        DB::table('posts')->insert([
            'title' => 'Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks',
            'body' => 'This is a blog post for marketing. I hope you will find helpful. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...',
            'slug' => 'first-post',
            'image' => '',
            'category_id' => '2',
            'user_id' => 1,
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('posts')->insert([
            'title' => 'Why Node.js Is The Coolest Kid On The Backend Development Block!',
            'body' => 'This is a blog post for marketing. I hope you will find helpful. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...',
            'slug' => 'second-post',
            'image' => '',
            'category_id' => '1',
            'user_id' => '1',
            'created_at' => $date,
            'updated_at' => $date
        ]);
        DB::table('posts')->insert([
            'title' => 'this is an example of a post with no image and no video simply text on two line title',
            'body' => 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly,...continue reading',
            'slug' => 'mon-post',
            'image' => '',
            'category_id' => '4',
            'user_id' => '1',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('posts')->insert([
            'title' => 'AMAZING VIDEO POST',
            'body' => 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly,...continue reading',
            'slug' => 'amazing-post',
            'image' => '',
            'category_id' => '3',
            'user_id' => '1',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        DB::table('posts')->insert([
            'title' => 'MY AWESOME STICKY POST',
            'body' => 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly,...continue reading',
            'slug' => 'awesome-post',
            'image' => '',
            'category_id' => '1',
            'user_id' => '1',
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }
}
