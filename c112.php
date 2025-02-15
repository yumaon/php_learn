<?php
$count = trim(fgets(STDIN));
$result = [];
for ($i = 0; $i < $count; $i++) {
  list($syukkoku, $flightTime, $touchaku) = explode(" ", trim(fgets(STDIN)));
  $oneDayTime = $syukkoku + $flightTime + (24 - $touchaku);
  $result[] = $oneDayTime;
}

echo min($result) . "\n";
echo max($result) . "\n";
