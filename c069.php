<?php
list($year, $month, $day) = explode(" ", trim(fgets(STDIN)));
list($nextMonth, $nextDay) = explode(" ", trim(fgets(STDIN)));

$isHolding = $year % 4 == 1;
$nextYear = $year;
if (!$isHolding) {
  while (true) {
    $nextYear += 1;
    if ($nextYear % 4 == 1) break;
  }
}

$currentInfo = ['year' => $year, 'month' => $month, 'day' => $day];
$nextInfo = ['year' => $nextYear, 'month' => $nextMonth, 'day' => $nextDay];

$count = 0;
while (true) {
  $count++;
  $currentInfo['day']++;
  if ($currentInfo['month'] % 2 == 0) {
    if ($currentInfo['day'] == 16) {
      $currentInfo['day'] = 1;
      $currentInfo['month']++;
      if ($currentInfo['month'] == 14) {
        $currentInfo['month'] = 1;
        $currentInfo['year']++;
      }
    }
  } elseif ($currentInfo['month'] % 2 != 0) {
    if ($currentInfo['day'] == 14) {
      $currentInfo['day'] = 1;
      $currentInfo['month']++;
      if ($currentInfo['month'] == 14) {
        $currentInfo['month'] = 1;
        $currentInfo['year']++;
      }
    }
  }
  if ($currentInfo == $nextInfo) break;
}

echo $count;
