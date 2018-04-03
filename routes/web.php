<?php

use App\Models\Template;
use App\Models\Story;
use App\Services\TextFormatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('test', function() {
    $formatter = new TextFormatter;
    $story = Story::find(3);
    return $formatter->format($story->template, $story->answers);
    $template = Template::find(1);
    
    echo "<pre>";
    foreach($story->answers as $answer){
        print_r($answer->prompt);
    }
    dd($story->answers);
    return dd($template->prompts);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('stories/{story}/prompts', 'StoryController@showPrompts');
Route::resource('stories', 'StoryController');