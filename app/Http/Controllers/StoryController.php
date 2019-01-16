<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use App\Models\Template;
use App\Services\TextFormatter;
use App\Services\InputSelector;

class StoryController extends Controller
{
    public function create(){
        return view('story.create', ['templates' => Template::all()]);
    }
    
    public function store(Request $request){
        $story = Story::create(['template_id' => $request->input('template_id')]);
        return redirect('/stories/'.$story->id.'/prompts');
    }
    
    public function showPrompts(Story $story){
        return view('story.prompts', ['story' => $story]);
    }
    
    public function show(Story $story){
        $inputSelector = new InputSelector;
        $inputs = $inputSelector->select($story->answers);
        $formatter = new TextFormatter;
        $body = $formatter->format($story->template->text, $inputs);
        $title = $formatter->format($story->template->title, $inputs);
        return view('story.show', ['title' => $title, 'body' => $body]);
    }
}
