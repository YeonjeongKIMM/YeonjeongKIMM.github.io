<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ticket';
$link = mysqli_connect($servername, $username, $password, $dbname);
$_GET['order'] = isset($order) ? $_GET['order'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>homework5</title>
    <style>

        div.right {
            float : right;
        }

        div.center {
            margin-top: 100px;
            margin-right: 500px;
            margin-left: 500px;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

    </style>
</head>
<body>

<div class="center">
    <form action="homework5.php" method="post">
        고객성명 <input type="text" name="name">
        <div class="right">
            <input type="submit">
            <br>
            </div>
        <table style="width:100%">
        <tr>
            <th>No </th>
            <th>구분 </th>
            <th colspan="2">어린이 </th>
            <th colspan="2">어른 </th>
            <th>비고 </th>
        </tr>

        <tr>
            <td>1 </td>
            <td>입장권 </td>
            <td>7,000 </td>
            <td>
                <select name="item1_1" size="1">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
            </td>

            <td>10,000</td>
            <td>
                <select name="item1_2" size="1">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
            </td>
            <td>입장</td>
        </tr>
        <tr>
            <td>2</td>
            <td>BIG3</td>
            <td>12,000</td>
            <td><select name="item2_1" size="1">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </td>
            <td>16,000</td>
            <td><select name="item2_2" size="1">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </td>
            <td>입장+놀이3종</td>
        </tr>
        
        <tr>
            <td>3</td>
            <td>자유이용권</td>
            <td>21,000</td>
            <td><select name="item3_1" size="1">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </td>
            <td>26,000</td>
            <td><select name="item3_2" size="1">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </td>
            <td>입장+놀이자유</td>
        </tr>
       
        <tr>
            <td>4</td>
            <td>연관이용권</td>
            <td>70,000</td>
            <td><select name="item4_1" size="1">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </td>
            <td>90,000</td>
            <td><select name="item4_2" size="1">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </td>
            <td>입장+놀이자유</td>
        </tr>
    </talbe>
    <br><br>

    <?php

        date_default_timezone_set('Asia/Seoul');
        if (date("A")=="AM"){
            $daycycle="오전";
        }
        else{
            $daycycle="오후";
        }
        $time = date("Y년 m월 d일 $daycycle h:i분");
        echo $time;
        $name = $_POST["name"];
        $a = $_POST["item1_1"];
        $b = $_POST["item1_2"];
        $c = $_POST["item2_1"];
        $d = $_POST["item2_2"];
        $e = $_POST["item3_1"];
        $f = $_POST["item3_2"];
        $g = $_POST["item4_1"];
        $h = $_POST["item4_2"];
            $sum = (7000 * $a)+(10000 * $b)+(12000 * $c)+(16000 * $d)+(21000 * $e)+(26000 * $f)+(70000 * $g)+(90000 * $h);
            $sql="INSERT INTO ticket(name , i1_1 , i1_2 , i2_1 , i2_2 , i3_1 , i3_2 , i4_1 , i4_2, daycycle , sum ) VALUES( '$name' , $a, $b, $c, $d, $e, $f, $g, $h, $time, $sum)";
            
            mysqli_query($link,$sql);

        $query = "SELECT * FROM ticket";
        $result =  mysqli_query($link,$query);


        if(isset($_POST["name"])) {
            echo "<br>";
            echo $name;
            echo " 고객님 감사합니다. <br>";

            if($a > 0 or $c > 0 or $e > 0  or $g > 0)
            echo "어린이 ";
            if($a > 0) {
                echo"입장권 ".$a;
                echo"매 ";
            }
            if($c > 0) {
                echo" BIG3 ".$c;
                echo"매 ";
            }
            if($e > 0) {
                echo" 자유이용권 ".$e;
                echo"매 ";
            }
            if($g > 0) {
                echo" 연간이용권 ".$g;
                echo"매 ";
            }

            echo("<br>");

            if($b > 0 or $d > 0 or $f > 0 or $h > 0)
            echo"어른 ";
            if($b > 0){
                echo"입장권 ".$b;
                echo"매 ";
            }
            if($d > 0){
                echo"BIG3 ".$d;
                echo"매 ";
            }
            if($f > 0){
                echo"자유이용권 ".$f;
                echo"매 ";
            }
            if($h > 0){
                echo"연간이용권 ".$h;
                echo"매 ";
            }

            echo "<br>합계 ".$sum;
            echo"원 입니다.<br>";

        }

        mysqli_free_result($result);
        mysqli_close($link);
    ?>
</div>
</body>
</html>