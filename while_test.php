<?php
$i = 10;
while ($i <= 20) {
  echo $i."\n";
  $i++;
}

$num_a = trim(fgets(STDIN));
$num_b = trim(fgets(STDIN));

while ($num_a <= $num_b) {
  echo $num_a."\n";
  $num_a++;
}

?>