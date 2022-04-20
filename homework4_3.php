<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<div class="contact">
  <h1>Fibonacci series in PHP</h1>
  <form action="#" method="POST">
    Enter number : <input type="text" name="number" id="number" /></br>
    <input  type="submit" name="submit" id="submit" value="Submit"></input>
  </form>

  <?php
   if(isset($_POST['submit'])) {
     $n = $_POST['number'];
    
     function fibonacci_series($a) {
       $f1 = -1;
       $f2 = 1;

       for ($i = 1; $i <= $a; $i++) {
        $f = $f1 + $f2;
        $f1 = $f2;
        $f2 = $f;
        echo "$f<br />"; 
       }
       
     }
  
    echo "Fibonacci series of $n is:<br />";
    echo fibonacci_series($n);

   }


  ?>
</div>
</body>
</html>