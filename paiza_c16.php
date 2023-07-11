<?php
$numPersons = trim(fgets(STDIN));
$taxation = 0;
foreach(range(1, $numPersons) as $i) {
  $income = trim(fgets(STDIN));
  if ($income <= 100000) {
    $taxation += 0;
  } elseif (100001 <= $income) {
    if ($income <= 750000) {
      $taxation += floor(($income - 100000) * 0.1);
    } elseif ($income <= 1500000) {
      $taxation += floor(($income - 100000 - ($income - 750000)) * 0.1);
      $taxation += floor(($income - 750000) * 0.2);
    } else {
      $taxation += floor(($income - 100000 - ($income - 750000)) * 0.1);
      $taxation += floor(($income - 750000 - ($income - 1500000)) * 0.2);
      $taxation += floor(($income - 1500000) * 0.4);
    }
  } 
}
echo $taxation."\n";
?>