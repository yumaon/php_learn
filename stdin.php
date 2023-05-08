<?php
    $name = trim(fgets(STDIN));
    echo "Hello " . $name . "\n";

    $num = trim(fgets(STDIN));
    echo $num * 10 . "\n";
    echo "おこづかい：" . ($num * 10) . "円";
?>
