<?php
function smallestIndex($array, $size) {
    $minElement = min($array);
    return array_search($minElement, $array);
}

$numbers = array(40, 10, 20, 30, 50);
echo smallestIndex($numbers, count($numbers));
?>