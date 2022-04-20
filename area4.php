<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method = "post">   
가로 : <input type="number" name="width">   
<br><br>   
세로 : <input type="number" name="length">
<br><br>
높이 : <input type="number" name="height">   
<br><br>
<input type = "submit" name = "submit" value="Calculate">   
</form>

<?php   
if(isset($_POST['submit']))  
    {   
$width = $_POST['width'];   
$length = $_POST['length'];   
$height = $_POST['height'];   
$area = $width * $length * $height;   
echo "가로가 $width 이고 세로가 $length 이고 높이가 $height 인 직육면체의 체적은 $area 입니다.";
return 0;
}
?>
</body>
</html>