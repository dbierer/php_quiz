<?php
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);

class MyEx extends Exception 
{}

function bad()
{
	try {
		throw new MyEx("Who?");
	} catch (OtherException $e) {
		echo "What?";
	}
}

try {
	bad();
} catch (MyEx $e) {
	echo "Bad!";
} catch (Exception $e) {
	echo "Oops!";
}

