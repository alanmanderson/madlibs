<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    public function template(){
        return $this->belongsTo(Template::class);
    }
    
    public function answers(){
        return $this->hasMany(Answer::class);
    }
}
