<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo PHP_VERSION . PHP_EOL; // 7.1.x

class CParent {
	function visit(CParent $p) {
        // do something
    }
}

// Warning: Declaration of ChildA::visit(Cparent $p, $x) should be compatible with CParent::visit(CParent $p)
class ChildA extends CParent {
	function visit(Cparent $p, $x) {
        echo __CLASS__;
    }
}

// FATAL ERROR:
/*
class ChildB extends CParent {
	protected function visit($p)
    {
        echo __CLASS__;
    }
}
*/

// Warning:  Declaration of ChildC::visit(ChildC $p) should be compatible with CParent::visit(CParent $p)
class ChildC extends CParent {
	function visit(ChildC $p) {
        echo __CLASS__;
    }
}

// Warning: Declaration of ChildC::visit(ChildC $p) should be compatible with CParent::visit(CParent $p)
class Child extends CParent {
	function visit($p) {
        echo __CLASS__;
    }
}
