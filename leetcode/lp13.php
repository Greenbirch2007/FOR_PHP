<?php
function quick_sort($nums){
    if (count($nums)<=1){
        return $nums;
    }
    quick_sort_c($nums,0,count($nums)-1);
    return $nums;
}
function quick_sort_c(&$nums,$p,$r){
    if ($p>=$r){
        return;
    }
    $provit=is_point($nums,$p,$r);
    quick_sort_c($nums,$p,$provit-1);
    quick_sort_c($nums,$provit+1,$r);
}

function is_point(&$nums,$p,$r)
{
    $provit=$nums[$r];
    $i=$p;
    for ($j=$p;$j<$r;$j++){
        if ($nums[$j]<$provit){
            $temp=$nums[$i];
            $nums[$i] =$nums[$j];
            $nums[$j] =$temp;
            $i++;
        }
    }

    $temp=$nums[$i];
    $nums[$i] = $provit;
    $nums[$r] = $temp;
    return $i;
}

$nums = [9,9,1,69,13];
var_dump(quick_sort($nums));
?>

