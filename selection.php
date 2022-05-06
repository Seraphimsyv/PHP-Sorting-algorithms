<?php

function selectionSort($arr)
{
    $sort_range_end = 0;
    while($sort_range_end < count($arr))
    {
        $current_smallest = $arr[$sort_range_end];
        $current_smallest_i = $sort_range_end;

        for($i = $sort_range_end+1; $i < count($arr); $i++)
        {
            if($current_smallest - $arr[$i] > 0)
            {
                $current_smallest_i = $i;
            }
        }

        $swap_f = $arr[$sort_range_end];
        $swap_s = $arr[$current_smallest_i];

        $arr[$sort_range_end] = $swap_s;
        $arr[$current_smallest_i] = $swap_f;

        $sort_range_end += 1;
    }

    return $arr;
}