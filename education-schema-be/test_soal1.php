<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php


$data = array(1, 2, 4, 3, 10, 11, 20, 5, 100, 200,110);


foreach ($data as $value) {
    if ($value%5==0 && $value%11==0)
    echo "FizzBuzz <br>";
    else if ($value%5==0)
    echo "Fizz <br>";
    else if ($value%11==0)
    echo "Buzz <br>";
    else 
    echo "$value <br>";
  }



?>



</body>
</html>