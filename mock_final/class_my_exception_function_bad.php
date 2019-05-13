<?php
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);

class MyException extends Exception
{}
function bad() {
    try {
        throw new MyException("Who?");
    } catch (OtherException $e) {
        echo "What?";
    }
}
try {
    bad();
} catch (MyException $e) {
    echo "Where?";
} catch (Exception $e) {
    echo "Why?";
}
