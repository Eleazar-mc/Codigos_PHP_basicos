<?php

interface Ave {
    function volar();
    function nadar();
}

class Perico implements Ave {
    function volar() {
        print "Perico volando\n";
    }
    function nadar() {
        print "Un perico no nada\n";
    }
}

class Pinguino implements Ave {
    function volar() {
        print "Un pingüino no vuela\n";
    }
    function nadar() {
        print "Pingüino nadando";
    }
}

# Interfaz común
function prueba_de_vuelo(Ave $ave) {
    $ave->volar();
}

$pe = new Perico();
$pi = new Pinguino();

prueba_de_vuelo($pe);
prueba_de_vuelo($pi);

echo get_parent_class('Perico');
echo get_parent_class('Pinguino');