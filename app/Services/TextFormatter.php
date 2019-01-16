<?php
namespace App\Services;

use Illuminate\Database\Eloquent\Collection;

class TextFormatter{
    public function format(string $template, array $inputs){
	$selectedValues = [];
        foreach ($inputs as $rank => $text){
            $template = str_replace('{{'.$rank.'}}', '<span>'.$text.'</span>', $template);
        }
        return $template;
    }
}
