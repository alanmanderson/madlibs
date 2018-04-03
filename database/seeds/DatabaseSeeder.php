<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TemplatesSeeder::class);
        $this->call(PromptsSeeder::class);
        $this->call(StoriesSeeder::class);
        $this->call(PromptsStoriesSeeder::class);
    }
}
