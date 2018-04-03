<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Message\InboundMessage;
use App\Models\Answer;

class NexmoController extends Controller
{   
    public function handleIncoming(Request $request){
        $message = InboundMessage::createFromGlobals();
        if($message->isValid()){
            try{
                list($storyId, $promptId, $suggestion) = explode(' ', $message->getBody(), 3);
            } catch (\Exception $e){
                throw new \Exception('Invalid message format');
            }
            $answer = Answer::create(['story_id' => $storyId, 'prompt_id' => $promptId, 'text' => $suggestion]);
            dd($answer);
        }
    }
}
