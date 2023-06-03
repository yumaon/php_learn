<?php
$input = explode(" ", trim(fgets(STDIN)));
$move_price = $input[0];
$hotel_price = $input[1];
$intern_count = $input[2];
$point = range(1 , $intern_count - 1);
for($i = 0; $i < $intern_count; $i++) {
  $schedule = explode(" ", trim(fgets(STDIN)));
  $shedules[] = $schedule;
}
for($i = 1; $i <= count($point); $i++) {
  $point_hotel_price[] = ($shedules[$i][0] - $shedules[$i - 1][1]) * $hotel_price;
}
$one_move_cost = $move_price * 2;

for ($i = 0; $i < count($point_hotel_price); $i++) {
  if ($point_hotel_price[$i] < $one_move_cost) {
    $lowest_price_ary[] = $point_hotel_price[$i];
  } else {
    $lowest_price_ary[] = $one_move_cost;
  }
}

echo array_sum($lowest_price_ary) + $one_move_cost;
?>