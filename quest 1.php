<!DOCTYPE html>
<html>
<body>

<h2>Enter Three Numbers</h2>
<form method="POST">
  Number 1: <br>
  <input type="number" name="number1" required><br>
  Number 2: <br>
  <input type="number" name="number2" required><br>
  Number 3: <br>
  <input type="number" name="number3" required><br>
  <input type="submit" name="submit" value="Order the numbers"><br>
</form>

</body>
</html>

<?php
if(isset($_POST['submit']))
{
    // read numbers from post data
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $num3 = $_POST['number3'];

    // put in an array
    $numbers = array($num1, $num2, $num3);

    // sort the array
    sort($numbers);

    // print ordered numbers
    echo "<h2>The Numbers in Ascending Order are: </h2>";
    foreach ($numbers as $number) {
        echo $number."<br>";
    }
}
?>
