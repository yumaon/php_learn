<?php
$input = explode(" ", trim(fgets(STDIN)));
$s_price = $input[0];
$a_limit = $input[1];
$b_limit = $input[2];
$result = "B";

while($result == "B" && $s_price + 10 < $a_limit or $result == "A" && $s_price + 1000 < $b_limit) {
  if ($result == "B" && $s_price + 10 < $a_limit) {
    $s_price += 10;
    $result = "A";
  } elseif ($result == "A" && $s_price + 1000 < $b_limit) {
    $s_price += 1000;
    $result = "B";
  }
}

echo $result." ".$s_price."\n";
?>