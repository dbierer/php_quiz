<?php
$xml = '<?xml version="1.0" encoding="ISO-8859-1"?>
<configdata>
	<production>
		<resource name="dbadapterOne">sqlite</resource>
	</production>
	<staging extends="production">
		<resource name="dbadapterTwo">mysql</resource>
		<resource name="dbadapterThree">db2</resource>
	</staging>
</configdata>';
$xmlElement = new SimpleXMLElement($xml);
echo $xmlElement->staging->resource['name'];

// if more than 1 resource
echo "\n---------------------\n";
$xml = '<?xml version="1.0" encoding="ISO-8859-1"?>
<configdata>
	<production>
		<resource name="dbadapterOne">sqlite</resource>
	</production>
	<staging extends="production">
		<resource name="dbadapterTwo">mysql</resource>
		<resource name="dbadapterThree">db2</resource>
	</staging>
</configdata>';
foreach ($xmlElement->staging->resource as $value) {
	echo PHP_EOL;
	echo $value['name'];
}
?>
