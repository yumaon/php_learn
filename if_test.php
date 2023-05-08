<?php
  $name = trim(fgets(STDIN));
  echo "Hello " . $name . "\n";

  if ($name == "PHP") {
    echo "ようこそ\n";
  } elseif($name == "php") {
    echo "おはよう！\n";
  } else {
    echo "さようなら\n";
  }
?>