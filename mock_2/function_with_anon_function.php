<?php
$e = 10;
function get($a, $b, $c = 3) {
    global $e;
    $d = 4 + $e;
    $x = function ($a, $b, $c) use ($e) {
        echo "[$a, $$b, $c, $d]\n";
        $d++;
        $e++;
    };
    $x($b, $a, $c);
}
get(2, 3);
get(2, 3, 5);
/* Produces:
Notice: Undefined variable: d
[3, $2, 3, ]
[3, $2, 5, 1]
 */
?>
