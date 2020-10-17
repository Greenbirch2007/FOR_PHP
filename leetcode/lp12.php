<?php

function merge_sort($nums){
    if (count($nums)<=1){
        return $nums;
    }
    merge_sort_c($nums,0,count($nums)-1);
    return $nums;
}
function merge_sort_c(&$nums,$p,$r)
{
    if ($p>=$r){
        return;
    }
    $middle= floor(($p+$r)/2);
    merge_sort_c($nums,$p,$middle);
    merge_sort_c($nums,$middle+1,$r);
    merge($nums,['start'=>$p,'end'=>$middle],['start'=>$middle+1,'end'=>$r]);
}
function merge(&$nums,$array_p,$array_r){
    $temp=[];
    $p = $array_p['start'];
    $r = $array_r['start'];
    $k=0;
    while ($p<$array_p['end'] && $r <=$array_r['end']){
        if ($nums[$p]<$nums[$r]){
            $temp[$k++]=$nums[$p++];
        }else{
            $temp[$k++]=$nums[$r++];
        }

    }
    while ($p<=$array_p['end']){
        $temp[$k++]=$nums[$p++];
    }
    while ($r<=$array_r['end']){
        $temp[$k++]=$nums[$r++];
    }

    for ($i=0;$i<$k;$i++){
        $nums[$i+$array_p['start']] =$temp[$i];
    }

}

$nums =[16,6,99,1,23];
var_dump(merge_sort($nums));exit;
?>