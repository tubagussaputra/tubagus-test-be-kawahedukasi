<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$data = array(1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1);
$i = 0;

foreach ($data as $value) {
  if(gettype($value) != "integer" || gettype($value) == "integer" && $value > 0)
    echo "indeks ke ".$i." adalah ".gettype($value)." dengan data ".$value."<br>";
  else
  	echo "Tidak bisa di validasi sistem";
  $i++;
}

?>

</body>
</html>