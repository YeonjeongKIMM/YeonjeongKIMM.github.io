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
밑변 : <input type="number" name="base">   
<br><br>  
높이 : <input type="number" name="height"><br>   
<input type = "submit" name = "submit" value="Calculate">   
</form>   
  
  
<?php   
if(isset($_POST['submit']))  
    {   
$base = $_POST['base'];   
$height = $_POST['height'];   
$area = ($base*$height) / 2;   
echo "밑변이 $base 이고 높이가 $height 인 삼각형의 넓이는 $area 입니다.";   
}   
?> 

</body>
</html>