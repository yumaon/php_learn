<?php
$rule = str_split(trim(fgets(STDIN)));
$inputText = str_split(trim(fgets(STDIN)));

$result = [];
foreach ($inputText as $str) {
  if (in_array($str, $rule)) {
    $result[] = $str;
  } else {
    foreach ($rule as $r) {
      if (strcasecmp($r, $str) === 0) {
        $result[] = $r;
        break;
      }
    }
  }
}

echo implode("", $result) . "\n";
