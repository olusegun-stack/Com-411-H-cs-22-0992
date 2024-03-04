<!DOCTYPE html>
<html>
<body>

<h2>Enter Matrix dimensions</h2>
<form method="POST">
  Number of rows (N):<br>
  <input type="number" name="n" required><br>
  Number of columns (M):<br>
  <input type="number" name="m" required><br>
  <input type="submit" name="submit_dim" value="Enter Matrix Dimensions"><br>
</form>

<?php

function print_matrix($matrix) {
    foreach ($matrix as $row) {
        foreach ($row as $element) {
            echo $element."  ";
        }
        echo "<br>";
    }
}

if(isset($_POST['submit_dim'])) {
    $n = $_POST['n'];
    $m = $_POST['m'];
    
    echo "<h2>Enter values for two ".$n." by ".$m." matrices</h2>";
    echo '<form method="POST">';
    for ($i=0; $i<2; $i++) {
        echo "Matrix ".($i+1)."<br>";
        for ($j=0; $j<$n; $j++) {
            for ($k=0; $k<$m; $k++) {
                echo '<input type="number" name="matrix'.$i.'_'.$j.'_'.$k.'" required> ';
            }
            echo "<br>";
        }
    }
    echo '<input type="submit" name="submit_values" value="Add Matrices"><br>';
    echo '</form>';
}
elseif (isset($_POST['submit_values'])) {
    $n = $_POST['n'];
    $m = $_POST['m'];
    
    $matrix1 = [];
    $matrix2 = [];
    for ($i=0; $i<$n; $i++) {
        for ($j=0; $j<$m; $j++) {
            $matrix1[$i][$j] = $_POST['matrix0_'.$i.'_'.$j];
            $matrix2[$i][$j] = $_POST['matrix1_'.$i.'_'.$j];
        }
    }
    
    $result = [];
    for ($i=0; $i<$n; $i++) {
        for ($j=0; $j<$m; $j++) {
            $result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
        }
    }

    echo "<h2>The resulting matrix is: </h2>";
    print_matrix($result); 
}

?>