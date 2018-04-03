<?php
namespace App\Services;

use Illuminate\Database\Eloquent\Collection;

class TextFormatter{
    public function format(string $template, Collection $inputs){
        foreach($inputs as $input){
            $template = str_replace('{{'.$input->prompt->ordinal_rank.'}}', $input->text, $template);
        }
        return $template;
    }
}