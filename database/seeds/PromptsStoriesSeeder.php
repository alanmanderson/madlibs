<?php

use Illuminate\Database\Seeder;
use App\Models\Template;
use App\Models\Prompt;
use App\Models\Answer;
use App\Models\Story;
use Faker\Factory;
use Faker\Generator;

class PromptsStoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new Generator();
        $template = Template::whereTitle('Commandments')->first();
        $story = Story::create(['template_id' => $template->id]);
        foreach($template->prompts as $prompt){
            switch ($prompt->ordinal_rank){
                case 1:
                    $text = "James Corden";
                    break;
                case 2:
                    $text = "aunt";
                    break;
                case 3:
                    $text = "jump";
                    break;
                case 4:
                    $text = "George Clooney";
                    break;
                case 5:
                    $text = "boots";
                    break;
                case 6:
                    $text = "girafes";
                    break;
                case 7:
                    $text = "cell phone";
                    break;
                case 8:
                    $text = "skip";
                    break;
            }
            Answer::create(['prompt_id' => $prompt->id, 'story_id' => $story->id, 'text' => $text]);
        }
        
    }
}
