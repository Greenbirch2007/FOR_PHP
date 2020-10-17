<?php

function bubbleSort(array $data){
    if (count($data)==1){
        return $data;
    }
    for ($i=0;$i<count($data);$i++){
        $isOver = false;
        for ($j=0;$j<count($data)-$i-1;$j++){
            if ($data[$j]>$data[$j+1]){
                $temp = $data[$j];
                $data[$j] =$data[$j+1];
                $data[$j+1] =$temp;
                $isOver=true;
            }
        }
        if(!$isOver){
            break;
        }
    }

    return $data;
}

$data=[99,2,6,6];

function insertOrder($data){
    for ($i=0;$i<count($data)-1;$i++){
        $temp =$data[$i];
        for ($j=$i-1;$j>=0;$j--){
            if($data[$j]>$temp){
                $data[$j+1]=$data[$j];
            }else{
                break;
            }
        }
        $data[$j+1]=$temp;
    }
    return $data;
}
var_dump(bubbleSort($data));


?>