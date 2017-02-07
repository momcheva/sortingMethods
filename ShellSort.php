<?php

//$arr = ['20', '6' , '5', '4', '10'];
$arr = ['Zero', 'Baby', 'Lili', 'Angel', 'Loscar'];
$count = count($arr);
$gap = floor($count/2);

while($gap>0)
{
    for($i = $gap; $i < $count; $i++){
        $temp = $arr[$i];
        $j= $i;
        
        while($j>=$gap && $arr[$j - $gap] > $temp){
            $arr[$j] = $arr[$j - $gap];
            $j-=$gap;
            
        }
        $arr[$j] = $temp;
    }
    
    $gap = floor($gap/2);
}

print_r($arr);

