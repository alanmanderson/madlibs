<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use App\Models\Template;
use App\Services\TextFormatter;

class StoryController extends Controller
{
    public function create(){
        return view('story.create', ['templates' => Template::all()]);
    }
    
    public function store(Request $request){
        $story = Story::create(['template_id' => $request->input('template_id')]);
        $this->showPrompts($story);
    }
    
    public function showPrompts(Story $story){
        return view('story.prompts', ['story' => $story]);
    }
    
    public function show(Story $story){
        $formatter = new TextFormatter;
        $body = $formatter->format($story->template->text, $story->answers);
        return view('story.show', ['title' => $story->template->title, 'body' => $body]);
    }
}
