<?php
$input = explode(" ", trim(fgets(STDIN)));
$gondora_count = $input[0];
$group_count = $input[1];

foreach(range(1, $gondora_count) as $i) {
  $gondora_limit_hash[$i] = trim(fgets(STDIN));
  $gondora_total_people[$i] = 0;
}

foreach(range(1, $group_count) as $i) {
  $group_ary[] = trim(fgets(STDIN));
}

$total_people = array_sum($group_ary);

while($total_people > 0) {
  foreach($gondora_limit_hash as $gon_num => $limit) {
    if ($group_ary[0] <= $limit) {
      $gondora_total_people[$gon_num] += $group_ary[0];
      $total_people -= $group_ary[0];
      array_shift($group_ary);
      if (empty($group_ary)) {
        break;
      }
    } else {
      $gondora_total_people[$gon_num] += $limit;
      $total_people -= $limit;
      $group_ary[0] -= $limit;
    }
  }
}

foreach($gondora_total_people as $key => $value) {
  echo $value."\n";
}
?>