<?php
  $name = trim(fgets(STDIN));
  echo "Hello " . $name . "\n";

  if ($name == "PHP") {
    echo "ようこそ\n";
  } else {
    echo "さようなら\n";
  }
?>