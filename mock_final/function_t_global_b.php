<?php
$a = 2;
$b = 3;
function test() {
		global $b;
		static $a;
		$a++;
		$b += 2;
}
test();
test();
test();
echo "$a, $b";
?>
