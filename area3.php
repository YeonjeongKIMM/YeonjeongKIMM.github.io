<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
<table border="0">
<tr>
<td> 반지름 : <input type="text" name="num1" value="" ></td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Calculate"/></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$r = $_POST['num1'];
$pi = 3.14;
$area = $pi * $r * $r;
echo "반지름이 $r 인 원의 넓이는 $area 입니다.";
return 0;
}
?>
</body>
</html>