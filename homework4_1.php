<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
// define variables and set to empty values
$nErr = "";
$n = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["n"])) {
    $nErr = "n is required";
  } else {
    $n = test_input($_POST["n"]);
    // check if name only contains letters and whitespace
    if (!is_int($n)) {
      $nErr = "Only number allowed";
    }
  }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<h2>PHP homework 4-1</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  n: <input type="text" name="n" value="<?php echo $n;?>">
  <span class="error">* <?php echo $nErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
  

<?php

echo "<h2>Your Input:</h2>";
if (isset($_POST['n'])) {
  $n = $_POST['n'];
  $sum = 0;
  $mul = 1;
}
for ($i = 1; $i <= $n; $i++) {
    $sum += $i;
    $mul *= $i;
}

echo("입력한 숫자 : " . $n . "<br>");

echo("합계 : ");
for ($i = 1; $i <= $n; $i++) {
    echo($i);
    if ($i < $n) {
        echo(" + ");
    }
}
echo(" = " .$sum);

echo("<br>");

echo("팩토리얼 : ");
for ($i = 1; $i <= $n; $i++) {
    echo($i);
    if ($i < $n) {
        echo(" * ");
    }
}
echo(" = " .$mul);

?>

</body>
</html>