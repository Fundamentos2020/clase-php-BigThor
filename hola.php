<?php

    // Declaración de variables
    $a = "Hola mundo";
    $b = 3;
    $c = 2.5;

    // Funcion
    function miFuncion() {
        //$a = "Texto nuevo";
        global $a;
        $a = "Texto nuevo";
    }
    miFuncion();
    //echo $a;

    // Arreglos
    $array_1 = array();
    $array_2 = array();

    $array_1[] = 1;
    $array_1[] = 5;
    $array_1[] = 7;

    //var_dump($array_1);

    $array_2['valor1'] = 1;
    $array_2['valor2'] = 3;
    $array_2['valor3'] = 9;

    //var_dump($array_2);

    // Json
    $json = json_encode($array_2);
    //var_dump($json);

    $json2 = '{"valor1":5,"valor2":1,"valor3":8}';
    $var_aux = json_decode($json2);
    //var_dump($var_aux->valor1);

    // Clases
    Class Aux {
        public $x;
        public $y;
    }

    $test = new Aux();
    $test->x = "Hola";
    $test->y = "Mundo";
    var_dump($test);

?>