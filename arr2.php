<?php

function removeDuplicates($arr) {
    $uniqueArr = array();
    foreach($arr as $value) {
        if(!in_array($value, $uniqueArr)) {
            $uniqueArr[] = $value;
        }
    }
    return $uniqueArr;
}

  // Define an array with duplicate elements
$arr = array(1, 2, 3, 2,4,5, 4, 3);

// Call the removeDuplicates function
$uniqueArr = removeDuplicates($arr);

// Output the unique elements
print_r($uniqueArr);

