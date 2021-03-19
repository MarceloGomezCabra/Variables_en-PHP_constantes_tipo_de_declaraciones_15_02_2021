<?php
//*CLASE 1* (Variables, listas, constantes, objetos e imprimir) 15/02/2021 

//Variables:
    $texto = (string) "Elefante";
    $numero = (int) 1;
    $decimales_grande = (float) 1.123456789;
    $decimales = (double) 1.12345678;
    $logico = (bool) true;

//Listas:    
    $lista = (array) ["php", 8, false];

//Constantes:
    define("PI", 3.1415);
    const letras = "constante";
    
//Objeto:
    $vaso = (object) [];
    $vaso->color = "blanco";
    $vaso->altura = 7;

//Imprimir:    
    var_dump($lista);
    echo "<br>";
    var_dump($vaso->altura);
    echo $numero;
    echo "<br>";
    echo $texto;

?>