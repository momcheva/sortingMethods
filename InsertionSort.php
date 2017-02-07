<?php
//$arr = ['20', '6' , '5', '4', '10'];
$arr = ['Zero', 'Baby', 'Lili', 'Angel', 'Loscar'];
$count = count($arr);

for($i=1; $i<$count; $i++){
    $index = $i;
    $temp = $arr[$i];
    
    while($index > 0 && $temp < $arr[$index-1]){
        $arr[$index] = $arr[$index-1];
        $index--;
    }
    $arr[$index] = $temp;
}

print_r($arr);