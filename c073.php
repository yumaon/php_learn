<?php
$distance = trim(fgets(STDIN));
list($usagiTime, $handicapLaunch, $handicapRest) = explode(" ", trim(fgets(STDIN)));
$kameTime = trim(fgets(STDIN));

$kameGoleTime = $kameTime * $distance;

$usagiGoleTime = 0;
$usagiDistance = 0;
while (true) {
  $usagiDistance += 1;
  $usagiGoleTime += $usagiTime;
  if ($usagiDistance == $distance) {
    break;
  } else {
    if ($usagiDistance % $handicapLaunch == 0) {
      $usagiGoleTime += $handicapRest;
    }
  }
}

if ($usagiGoleTime == $kameGoleTime) {
  echo "DRAW";
} else {
  if ($usagiGoleTime > $kameGoleTime) {
    echo "KAME";
  } else {
    echo "USAGI";
  }
}
