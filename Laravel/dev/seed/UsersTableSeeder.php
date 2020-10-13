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
//        factory.txt.txt(\App\Post::class)->create(); // For single row
        factory(\App\Post::class, 50)->create(); // For multiple row like 50
    }
}
