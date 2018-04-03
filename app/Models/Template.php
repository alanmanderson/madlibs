<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    public function prompts(){
        return $this->hasMany(Prompt::class)->orderBy('ordinal_rank', 'ASC');
    }
}
