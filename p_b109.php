<?php
$input = explode(" ",trim(fgets(STDIN)));
$sold_seat_count = $input[0];
$h = $input[1];
$w = $input[2];
$p_q = array_slice($input, 3, 2);

foreach(range(1, $sold_seat_count) as $i) {
  $sold_seat[] = explode(" ", trim(fgets(STDIN)));
}

$i = 0;
while($i < $h) {
  foreach(range(0, ($w - 1)) as $j) {
    $seat_total_ary[] = [$i, $j];
  }
  $i++;
}

foreach($sold_seat as $s_seat) {
  if (in_array($s_seat, $seat_total_ary)) {
    $key = array_search($s_seat, $seat_total_ary);
    unset($seat_total_ary[$key]);
    }
}

foreach($seat_total_ary as $seat) {
  $mk = abs($p_q[0] - $seat[0]) + abs($p_q[1] - $seat[1]);
  $mk_hash[$mk][] = $seat; 
}

ksort($mk_hash);
$k = array_key_first($mk_hash);
foreach($mk_hash[$k] as $value) {
  echo implode(" ", $value)."\n";
}
?>