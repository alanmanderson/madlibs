<?php

use Illuminate\Database\Seeder;
use App\Models\Template;
use App\Models\Prompt;

class PromptsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $template = Template::whereTitle('Commandments')->first();
        $ordinal_rank = 1;
        $text = 'Name';
        $prompts = Prompt::create(['template_id' => $template->id, 'ordinal_rank' => $ordinal_rank++, 'text' => $text]);
        $text = 'Relative (brother, aunt, etc.)';
        $prompts = Prompt::create(['template_id' => $template->id, 'ordinal_rank' => $ordinal_rank++, 'text' => $text]);
        $text = 'Verb';
        $prompts = Prompt::create(['template_id' => $template->id, 'ordinal_rank' => $ordinal_rank++, 'text' => $text]);
        $text = 'A different Name';
        $prompts = Prompt::create(['template_id' => $template->id, 'ordinal_rank' => $ordinal_rank++, 'text' => $text]);
        $text = 'Plural Thing';
        $prompts = Prompt::create(['template_id' => $template->id, 'ordinal_rank' => $ordinal_rank++, 'text' => $text]);
        $text = 'Plural Animal (foxes)';
        $prompts = Prompt::create(['template_id' => $template->id, 'ordinal_rank' => $ordinal_rank++, 'text' => $text]);
        $text = 'Thing';
        $prompts = Prompt::create(['template_id' => $template->id, 'ordinal_rank' => $ordinal_rank++, 'text' => $text]);
        $text = 'Verb';
        $prompts = Prompt::create(['template_id' => $template->id, 'ordinal_rank' => $ordinal_rank++, 'text' => $text]);
    }
}
