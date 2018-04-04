<?php
namespace App\Services;

use Illuminate\Database\Eloquent\Collection;

class TextFormatter{
    public function format(string $template, Collection $inputs){
        $counter = 1;
        while(true){
            $curVals = $inputs->filter(function ($value, $Key) use ($counter){
                return $value->prompt->ordinal_rank == $counter;
            });
            if ($curVals->count() == 0) break;
            $input = $curVals->random(1)->first();
            $template = str_replace('{{'.$input->prompt->ordinal_rank.'}}', $input->text, $template);
            $counter++;
        }
        return $template;
    }
}