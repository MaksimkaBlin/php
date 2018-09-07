<?php

class toArray
{
    public function arraySum(array $arr)
    {
        $sum = 0;
        foreach ($arr as $item) {
            if (is_int($item)) {
                $sum += $item;
            }
        }
        return $sum;
    }

    public function inArray($needly, array $arr, $strict = FALSE)
    {
        foreach ($arr as $item) {
            if ($strict == FALSE && $needly == $item) {
                return TRUE;
            } elseif ($strict == TRUE && $needly === $item) {
                return TRUE;
            } else {
                continue;
            }
        }
        return FALSE;
    }

    public function arrayDiff(array $arr1, array $arr2)
    {
        foreach ($arr1 as $key => $value) {
            if (in_array($value, $arr2)) {

                unset($arr1[$key]);
            }
        }
        return $arr1;
    }

    public function sortN(array $arr)
    {
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = $i + 1; $j < count($arr); $j++) {
                if ($arr[$i] > $arr[$j]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $temp;
                }
            }
        }
        return $arr;
    }
}
