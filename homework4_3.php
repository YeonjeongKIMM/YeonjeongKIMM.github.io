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
$nErr= "";
$n= "";
$dada = array();
$a = 0;
$b = 1;
$c = 0;
$f = 0;
$format_a = number_format($a, 1);
$format_b = number_format($b, 1);
$format_c = number_format($c, 1);
$format_f = number_format($f, 1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["n"])) {
    $nErr = "n is required";
  } else {
    $n = test_input($_POST["n"]);
    // check if name only contains letters and whitespace
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP HomeWork 4-3</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  n : <input type="text" name="n" value="<?php echo $n;?>">
  <span class="error">* <?php echo $nErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php

for($i = 0; $i <= $n; $i++)
{
    if($i == 0)
    {
        echo $a;
        echo "<br>";
        continue;
    }
    else if($i == 1)
    {
        echo $b;
        echo "<br>";
        continue;

    }

    $c = $a + $b;
    echo $c, "";

    $a = $b;
    $b = $c;

    // $f = $c / $a+$b;
    // $format_f = number_format($f, 1); 
    // echo $format_f;
    echo "<br>";

}

?>

</body>
</html>
