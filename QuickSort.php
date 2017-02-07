<?php
//$unsorted = ['Zero', 'Baby', 'Lili', 'Angel', 'Loscar'];

$unsorted = array(43,21,2,1,9,24,2,99,23,8,7,114,92,5);

function quicksort($array)
{
    //find array size
    $cnt = count($array);

    //if length of array is 1 then just return array
    if ($cnt < 2) {
        return $array;
    }

    //select an item to act as our pivot point, since list is unsorted first position is easiest
    $pivot = $array[0];
    
    //declare our two arrays to act as partitions
    $left = $right = array();
    
    //loop and compare each item in the array to the pivot value, place item in appropriate partition
    for($i=1; $i < $cnt; $i++){
        if($array[$i] < $pivot){
            $left[] = $array[$i];
        } else {
            $right[] = $array[$i];
        }
    }
    
    //use recursion to sort the left and right lists
    return array_merge(quicksort($left), array($pivot), quicksort($right));
}
 
/* @var $sorted type */
$sorted = quicksort($unsorted);
print_r($sorted);