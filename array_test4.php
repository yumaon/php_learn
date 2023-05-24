<?php
// 2次元配列をarrayで作成する
$teams = array(
  array(10, 100),
  array(3, 9),
  array(2001, 2002)
);

foreach ($teams as $row) {
  foreach ($row as $column) {
      echo $column." ";
  }
  echo "\n";
}
?>