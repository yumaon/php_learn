<?php
$products_count = trim(fgets(STDIN));
foreach(range(1, $products_count) as $i) {
  $input = explode(" ",trim(fgets(STDIN)));
  $type = $input[0];
  $price = $input[1];
  $type_price_hash[$type] += $price;
}
$point = 0;
foreach($type_price_hash as $type => $price) {
  if($type == 0) {
    $point += floor($price / 100) * 5;
  } elseif($type == 1) {
    $point += floor($price / 100) * 3;
  } elseif($type == 2) {
    $point += floor($price / 100) * 2;
  } elseif($type == 3) {
    $point += floor($price / 100) * 1;
  }
}

echo $point."\n";
?>