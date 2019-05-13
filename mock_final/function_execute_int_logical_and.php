<?php
function execute($value) {
	switch ($value) {
		case true:
			return 1;
		case false:
			return 0;
		default:
			return -1;
	}
}
$value = '1';
echo execute(((int) $value) & 2);

// breaking it down:

echo "\n(int) \$value: \n";
var_dump((int) $value);

echo "Binary (int) \$value: \n";
printf('%04b', (int) $value) . PHP_EOL;

echo "\nBinary 2: \n";
printf('%04b', 2) . PHP_EOL;

echo "\nResult of Logical AND: \n";
var_dump(((int) $value) & 2);
