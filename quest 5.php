<?php
// Declare an array of 50 float components
$alpha = array_fill(0, 50, 0.0);

// Initialize the first half of the array to be squares
for($i = 0; $i < 25; $i++){
    $alpha[$i] = $i * $i;
}

// Initialize the second half of the array to be triple
for($i = 25; $i < 50; $i++){
    $alpha[$i] = 3 * $i;
}

// Output the array, 10 elements per line
$counter = 0;
foreach($alpha as $value){
    echo $value . "\t";
    $counter++;
    if($counter % 10 == 0){
        // Print newline after every tenth element
        echo "<br />";
    }
}
?>