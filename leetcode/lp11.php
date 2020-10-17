<?php

function selectOrder($data){
    if (count($data)<=1){
        return $data;
    }
    for ($i=0;$i<count($data);$i++){
        $min=$i;
        for ($j=1;$j<count($data);$j++){
            if ($data[$j]<$data[$min]){
                $min=$j;

            }
        }
        if ($min!=$i){
            $temp = $data[$i];
            $data[$i]=$data[$min];
            $data[$min] = $temp;
        }
    }
    return $data;
}

$data=[99,3,6,6,1,120];
var_dump(bubbleSort($data));

?>