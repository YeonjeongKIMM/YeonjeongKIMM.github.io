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
$temp = 0;

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

<h2>PHP HomeWork 4-2</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  n : <input type="text" name="n" value="<?php echo $n;?>">
  <span class="error">* <?php echo $nErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
for($i = 0; $i < $n; $i++)
{
    $dada[$i] = rand(0,100);

    if($i == 0)
        echo "생성된 결과 : ",$dada[$i];
    else
        echo ", ",$dada[$i];
}

echo "<br>";

for($i = 0 ; $i < $n; $i++)
{
    for($j = 0; $j < $n; $j++)
    {
        if($dada[$i] < $dada[$j])
        {
            $temp = $dada[$j];
            $dada[$j] = $dada[$i];
            $dada[$i] = $temp;
        }
    }
}
for($i = 0; $i < $n; $i++)
{
    if($i == 0)
        echo "정렬된 결과 : ",$dada[$i];
    else
        echo ", ",$dada[$i];
}

?>

</body>
</html>
