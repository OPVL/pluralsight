<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post([
            'title' => 'Learning Laravel',
            'content' => 'This is the first seeded data that will be in our App, v exciting!!'
        ]);
        $post->save();

        $post = new \App\Post([
            'title' => 'A Second Post',
            'content' => 'Wow, Second post jitters. Mind has gone blank. Sample data yay!'
        ]);
        $post->save();
    }
}
