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

<h2>PHP homework 4-2</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  n: <input type="text" name="n" value="<?php echo $n;?>">
  <span class="error">* <?php echo $nErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>


<?php

echo "[ n개의 10이상 100이하 랜덤 정수 출력 (오름차순) ]<br/>\n";

for ($i = 0; $i < $n; $i++) {
  $result = mt_rand(10, 100);
  echo "$result<br />\n";
}


echo "\n\n<br /><br />\n\n\n"; // 줄바꿈


?>

</body>
</html>