<?php
function test($one, &$two, &$three = '3')
{
    echo "($one, $two, $three)\n";
    $three += 3;
    $two++;
}
$one = 21;
$two = 22;
$three = 23;
test($one, $two, $three);
test($one, $two);
echo "(one, $two, $three)\n";

/* Produces:
(21, 22, 23)
(21, 23, 3)
(one, 24, 26)
*/

?>
