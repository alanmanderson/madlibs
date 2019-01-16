<?php
namespace App\Services;

use Illuminate\Database\Eloquent\Collection;

class InputSelector{
    public function select(Collection $inputs){
        $counter = 0;
	$selectedValues = [];
        while(true){
            $counter++;
            $curVals = $inputs->filter(function ($value, $Key) use ($counter){
                return $value->prompt->ordinal_rank == $counter;
            });
            if ($curVals->count() == 0) break;
            $selectedValues[$counter] = $curVals->random(1)->first()->text;
        }
        return $selectedValues;
    }
}
