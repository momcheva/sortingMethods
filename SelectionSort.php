<?php
 //$arr = ['20', '6' , '5', '4', '10'];
$arr = ['Zero', 'Baby', 'Lili', 'Angel', 'Loscar'];

$cnt = count($arr);

for($i=0; $i<$cnt-1; $i++){
    $min = $arr[$i];
    $k=$i;
    
    for($j=$i+1; $j<$cnt;$j++){
        if($arr[$j]< $min){
            $min = $arr[$j];
            $k = $j;
        }
    }
        $arr[$k] = $arr[$i];
        $arr[$i] = $min;
}

print_r($arr);
//Version 2
/*
for($i=0; $i<$cnt; $i++){
    $index=$i;
    for($j=$i+1;$j< $cnt; $j++){
        if($arr[$i]<$arr[$index]){
            $index=$j;
        }
    }
    $temp = $arr[$i];
    $arr[$i] = $arr[$index];
    $arr[$index] = $temp;    
}
 */