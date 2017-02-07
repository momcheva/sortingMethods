<?php
//$arr = ['20', '6' , '5', '4', '10'];
$arr = ['Zero', 'Baby', 'Lili', 'Angel', 'Loscar'];
$count = count($arr);

/*
for($i=0; $i<$count; $i++){
   for($j=0;$j<$count-1; $j++){
      if($arr[$j]>$arr[$j+1]){
       $temp = $arr[$j+1];
       $arr[$j+1] = $arr[$j];
       $arr[$j] = $temp;
      }
   }
}
 
print_r($arr);
*/

//Version 2
/*
do{
    $swapped = false;
    for($i = 0; $i <$count-1; $i++){
        //swap when out of order
        if($arr[$i] > $arr[$i+1]){
            $temp = $arr[$i];
            $arr[$i] = $arr[$i+1];
            $arr[$i + 1] = $temp;
            $swapped = true;
        }
    }
    
    $count--;
}
while($swapped);
*/

//Version 3
while(true) {
    $isSorted = false;
    for($i=0; $i+1 < $count; $i++){
        if($arr[$i+1] < $arr[$i]) {
            $temp = $arr[$i+1];
            $arr[$i+1] = $arr[$i];
            $arr[$i] = $temp;
            $isSorted = true;
        }
    }
    if(!$isSorted){
        break;
    }
}

print_r($arr);