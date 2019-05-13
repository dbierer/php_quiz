<?php
$xml =<<<CONTENT
<?xml version="1.0" encoding="utf-8"?>
<html>
<body>
<ul>
	<li name="x1">List 1</li>
	<li name="x2">List 2</li>
	<li name="x3">List 3</li>
</ul>
</body>
</html>
CONTENT;

$dom = new DOMDocument();
$dom->loadXML($xml);

// doesn't do anything
echo "\nA: ";
//echo $dom->getElementById('x3')->text();

// undefined method
echo "\nB: Fatal error";
//echo $dom->getElementByName('x3')->text();

// correct answer
echo "\nC: ";
$currentText = '';
$scan = $dom->getElementsByTagName('li');
foreach($scan as $list)
	$currentText = $list->nodeValue;
echo $currentText;

// innerHTML doesn't exist in this context
echo "\nD: Fatal error";
$xpath = new DOMXPath($dom);
//echo $xpath->query("//*[@name='x3']")->innerHTML();

?>
