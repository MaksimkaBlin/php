<?php


     function arraySum (array $arr){
        $sum = 0;
        foreach ($arr as $item){
            if (is_int($item)){
                $sum += $item;
            }
        }
         return $sum;
    }

     function inArray ($needly, array $arr, $strict = FALSE){
        foreach ($arr as $item){
            if ($strict == FALSE && $needly == $item){
                return TRUE;
            }elseif ($strict == TRUE && $needly === $item){
                return TRUE;
            }else{
                continue;
            }
        }
        return FALSE;
    }

     function arrayDiff (array $arr1, array $arr2){
        foreach ($arr1 as $key => $value){
            if (in_array($value, $arr2)){
                unset($arr1[$key]);
            }
        }
        return $arr1;

    }

$arr = [];
$arr1 = [1,2,3,4,5,6,7,8,9];
$arr2 = [12,24,36,48,"sfsdfs",5,6,7,8,9];



var_dump(arrayDiff($arr2, $arr1));

//in_array