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
세로 : <input type="number" name="length"> <br>   
<input type = "submit" name = "submit" value="Calculate">   
</form>   
 
<?php   
if(isset($_POST['submit']))  
    {   
$width = $_POST['width'];   
$length = $_POST['length'];   
$area = $width*$length;   
echo "가로가 $width , 세로가 $length 인 직사각형의 넓이는  $area 입니다.";   
}   
?>

</body>
</html>