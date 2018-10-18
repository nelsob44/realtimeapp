<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create();
        factory(App\Model\Category::class, 5)->create();
        factory(App\Model\Question::class, 60)->create();
        factory(App\Model\Reply::class, 60)->create()->each(function ($reply) {
            return $reply->like()->save(factory(App\Model\Like::class)->make());
        });
    }
}
