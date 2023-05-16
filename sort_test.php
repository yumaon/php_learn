<?php
while($input = trim(fgets(STDIN))) {
    $ary[] = $input;
}
sort($ary);
print_r($ary);
?>
