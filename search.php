<?php
function searchArray($arr, $element) {
    foreach($arr as $value) {
        if($value === $element) {
            return TRUE;
        }
    }
    return FALSE;
}

// Define an array with some elements
$arr = array(1, 2, 3, 4, 5);

// Call the searchArray function to search for an element
$elementExists = searchArray($arr, 3);

// Output the result
if($elementExists) {
    echo "The element exists in the array.";
} else {
    echo "The element does not exist in the array.";
}
