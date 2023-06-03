<?php
$input = explode(" ", trim(fgets(STDIN)));
$sold_seat = $input[0];
$h = $input[1];
$w = $input[2];
$p_q = array_slice($input, 3, 2);
for($i = 0; $i < $sold_seat; $i++) {
  $sold_ary[] = explode(" ", trim(fgets(STDIN)));
}

$c = 0;
while($c < $h){
  $i = 0;
  while($i < $w) {
    $total_seat_ary[] = [$c, $i];
    $i++;
  }
  $c++;
}

foreach($sold_ary as $sold_s) {
  if(in_array($sold_s, $total_seat_ary)) {
    $key = array_search($sold_s, $total_seat_ary);
    unset($total_seat_ary[$key]);
  }
}

foreach($total_seat_ary as $seat) {
  $m_km = abs($p_q[0] - $seat[0]) + abs($p_q[1] - $seat[1]);
  if ($m_km_hash[$m_km]) {
    $m_km_hash[$m_km][] = $seat;
  } else {
    $m_km_hash[$m_km] = [$seat];
  }
}
ksort($m_km_hash);
$k = array_key_first($m_km_hash);
echo "予約可能でおすすめの座席は以下になります\n";
foreach($m_km_hash[$k] as $value) {
  echo implode(" ", $value)."\n";
} 
?>