<?php

class Prueba {
    function f($x) {
        print "---" . $x . "\n";
    }

    function __call($funcion, $argumentos) {
        print $funcion . "\n";
        var_dump($argumentos);

        if($funcion == "f1") {
            //call_user_func($argumentos[0], $argumentos[1]);
            call_user_func("f", 49 );
            print "XXXXXXXXX";
        }
    }

    static function __callStatic($funcion, $argumentos) {
        print $funcion . "\n";
        var_dump($argumentos);
    }
}

$o = new Prueba();
$o->f1(5);
$o->f1(5, true, "cadena");

Prueba::f2();
Prueba::f2("Método de clase", 0.00000005);

$o->f1("f", 49);

/*class Prueba {
    function barber($type) {
        echo "You wanted a $type haircut, no problem\n";
    }

    function proto() {
        $p = new Prueba();
        call_user_func($p->barber, "mushroom");
        //call_user_func('barber', "shave");
    }
}

(new Prueba())-*/