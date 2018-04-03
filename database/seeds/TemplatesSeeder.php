<?php

use Illuminate\Database\Seeder;
use App\Models\Template;

class TemplatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $text = "1 {{1}} 3:7<br>And it came to pass that I, {{1}}, said unto my {{2}}: ".
                "I will go and {{3}} the things which {{4}} hath commanded, for I know ".
                "that {{4}} giveth no {{5}} unto {{6}}, save he shall prepare a {{7}} ".
                "for them that they may {{8}} the thing which he commandeth them.";
        Template::create(['title' => 'Commandments', 'text' => $text]);
    }
}
