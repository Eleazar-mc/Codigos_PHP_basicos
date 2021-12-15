<?php


class dad {
    function dad()
    {
        // implements some logic
    }
}

class child extends dad {
    function child()
    {
        echo "I'm ", get_parent_class($this), "'s son\n";
    }
}

class child2 extends dad {
    function child2()
    {
        echo "I'm ", get_parent_class('dad'), "'s son too\n";
    }
}

$foo = new child();
$bar = new child2();
