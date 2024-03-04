<!DOCTYPE html>
<html>
<body>

<h2>Enter a string to transform to uppercase</h2>
<form method="POST">
  String: <br>
  <input type="text" name="text" required><br>
  <input type="submit" name="submit" value="Transform to uppercase"><br>
</form>

</body>
</html>

<?php
if(isset($_POST['submit'])) {
    // read the string from post data
    $text = $_POST['text'];

    // transform text to uppercase
    $upperCaseText = strtoupper($text);

    // print the transformed string
    echo "<h2>The transformed string is: </h2>";
    echo $upperCaseText;
}
?>