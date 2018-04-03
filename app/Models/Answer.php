<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = "prompts_stories";
    protected $guarded = [];
    
    public function prompt(){
        return $this->belongsTo(Prompt::class);
    }
    
    public function story(){
        return $this->belongsTo(Story::class);
    }
}
