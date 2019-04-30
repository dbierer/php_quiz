<?php
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);

class MyException extends Exception
{
}

function bad()
{
	try {
		throw new MyException("Something bad happened");
	} catch (OtherException $e) {
		echo "What?";
	}
}

try {
	bad();
} catch (MyException $e) {
	echo "Bad!";
} catch (Exception $e) {
	echo "Oops!";
}

