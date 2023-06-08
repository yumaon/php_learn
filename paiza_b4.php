<?php
$input = explode(" ", trim(fgets(STDIN)));
$rosen_count = $input[0];
$station_count = $input[1];

foreach(range(1, $rosen_count) as $i) {
  $rosen_hash[$i] = explode(" ", trim(fgets(STDIN)));
}

// print_r($rosen_hash);

$keiyu_count = trim(fgets(STDIN));
foreach(range(1, $keiyu_count) as $i) {
  $rosen_to_station[] = explode(" ", trim(fgets(STDIN))); 
}

// print_r($rosen_to_station);

$total_price = 0;
$my_rosen = 1;
$my_station = 0;
foreach(range(1, $keiyu_count) as $i) {
  $next_rosen = $rosen_to_station[0][0];
  $next_station = $rosen_to_station[0][1] - 1;
  if ($next_rosen == $my_rosen) {
    if ($my_station == 0) {
      $total_price += $rosen_hash[$next_rosen][$next_station];
      $my_station = $next_station + 1;
      array_shift($rosen_to_station);
    } else {
      $total_price += abs($rosen_hash[$my_rosen][$my_station - 1] - $rosen_hash[$next_rosen][$next_station]);
      $my_station = $next_station + 1;
      array_shift($rosen_to_station);
    }
  } elseif ($next_rosen != $my_rosen) {
    $my_rosen = $next_rosen;
    if ($my_station == 0) {
      $total_price += $rosen_hash[$next_rosen][$next_station];
      $my_station = $next_station + 1;
      array_shift($rosen_to_station);
    } else {
      $total_price += abs($rosen_hash[$my_rosen][$my_station - 1] - $rosen_hash[$next_rosen][$next_station]);
      $my_station = $next_station + 1;
      array_shift($rosen_to_station);
    }
  }
} 

echo $total_price;
?>