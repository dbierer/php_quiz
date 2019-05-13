<?php
function XYZ($a) {
    $b = fopen($a, 'r');
    $c = '';
    while (!feof($b)) $c .= fread($b, 1024);
    return $c;
}
echo XYZ('gettysburg_address.txt');
echo PHP_EOL;
// same thing:
echo file_get_contents('gettysburg_address.txt');
?>
