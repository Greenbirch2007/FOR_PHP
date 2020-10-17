<?php


function tenChageEight($num)
{
    $data=[];
    while ($num){
        $val = $num%8;
        $num = intval(floor($num/8));
        array_unshift($data,$val);
    }
    $data2= [];
    while (!empty($data)){
        array_push($data2,array_shift($data));

    }
    return implode($data2);


}
var_dump(tenChageEight(666));
?>