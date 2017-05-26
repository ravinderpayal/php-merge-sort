<?php

function merge_sort($a){
    $a_c = count($a);
    if($a_c <= 1) return $a;
    $left = array();
    $right = array();
    for($i = 0; $i< $a_c; $i++){
        if($i< ($a_c / 2)){
            $left[] = $a[$i];
        }
        else{
            $right[] = $a[$i];
        }
    }
    //var_dump($left);
    //var_dump($right);
    $left = merge_sort($left);
    $right = merge_sort($right);
    return merge($left, $right);
}

function merge($a, $b){
    $result = array();
    $left = $a;
    $right = $b;
    while(count($left) and count($right)){
        if($left[0] < $right[0]){
            $result[] = $left[0];
            array_shift($left);
        }
        else{
            $result[] = $right[0];
            array_shift($right);            
        }
    }
    while(count($left)){
            $result[] = $left[0];
            array_shift($left);
        }
    while(count($right)){
            $result[] = $right[0];
            array_shift($right);
        }
    //var_dump($result);
    return $result;
}
$dummy = array(8,9,1,3,5,6);

var_dump(merge_sort($dummy));
//$dummy[] = 2;
//var_dump($dummy);
