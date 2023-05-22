<?php

$numbers = [12, 34, 56, 78, 90];

for($i = 0; $i < count($numbers); $i++) {
  $numbers2[$i] = $numbers[$i] * 3;
}

print_r($numbers2);
?>