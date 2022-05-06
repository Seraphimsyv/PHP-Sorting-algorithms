<?php

function shakerSort($arr)
{
    while(true)
    {
        $is_sorted = true;
        for ($i=0; $i < count($arr)-1; $i++)
        {
            if($arr[$i] > $arr[$i+1])
            {
                $is_sorted = false;
                $min = $arr[$i+1];
                $max = $arr[$i];
                $arr[$i] = $min;
                $arr[$i+1] = $max;
            }
        }
        for ($i=count($arr)-1; $i > 1; $i--)
        {
            if($arr[$i] < $arr[$i-1])
            {
                $is_sorted = false;
                $min = $arr[$i-1];
                $max = $arr[$i];
                $arr[$i-1] = $min;
                $arr[$i] = $max;
            }
        } 
        if($is_sorted == true) return $arr;
    }
}