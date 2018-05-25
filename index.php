<!DOCTYPE html>
<!--
Ejercicio despregamento web tarea 6
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tarea 6</title>
    </head>
    <body>
        <?php
        /**
         * Aplicacion principal
         * Realizamos llamadas a la clase y a sus metodos
         * @package tarea6
         * @license http://creativecommons.org
         * @author Jose Manuel Rodriguez Rodriguez
         * @version Version 1.0.1
         */
         
        require_once 'clase.php';
        
        // Creamos el objeto / Instanciamos la clase y le pasamos los parámetros del constructor
        
        $coche = new Coche("BMW VICTOR", "ROJO", 100);
         // Mostramos la información del primer coche
        echo $coche->mostrarInfo();
 
        $coche2 = new Coche("SEAT 500", "VERDE");
        // Mostramos la información del segundo coche
        echo $coche2->mostrarInfo();
       
        
/**
         * funcion palindromo
         * Realizamos llamadas a la clase y a su metodo ispalindrome
         * @package JMRR
         * @license http://creativecommons.org
         * @author Jose Manuel Rodriguez Rodriguez
         * @version Version 1.0.1
         */        	
	 
$EJ1 = new Coche("",""); 
echo "<hr><h1><br/>¿Acaso hubo búhos acá?<br/></h1>"; 
echo $EJ1 -> isPalindrome('¿Acaso hubo búhos acá?'); 
        
 /**
         * funcion primo
         * Realizamos llamadas a la clase y a su metodo primo
         * @package JMRR
         * @license http://creativecommons.org
         * @author Jose Manuel Rodriguez Rodriguez
         * @version Version 1.0.1
         */        	
$EJ2 = new Coche("","",0); 
echo $EJ2 -> primo($num=5); 
              
/**
         * funcion maior
         * Realizamos llamadas a la clase y a su metodo primo
         * @package JMRR
         * @license http://creativecommons.org
         * @author Jose Manuel Rodriguez Rodriguez
         * @version Version 1.0.1
         */        	
$EJ3 = new Coche("",""); 
echo $EJ3 -> maior($a=2, $b=6); 

                      
/**
         * funcion ecuacion de 1 grado
         * Realizamos llamadas a la clase y a su metodo primo
         * @package JMRR
         * @license http://creativecommons.org
         * @author Jose Manuel Rodriguez Rodriguez
         * @version Version 1.0.1
         */        	
$EJ4 = new Coche("",""); 
echo $EJ4 -> ecuacion($c=4, $d=6); 
        


/**
         * funcion año bisiesto
         * Realizamos llamadas a la clase y a su metodo primo
         * @package JMRR
         * @license http://creativecommons.org
         * @author Jose Manuel Rodriguez Rodriguez
         * @version Version 1.0.1
         */        	
$EJ5 = new Coche("",""); 
echo $EJ5 -> esBisiesto($year=1945); 
        
        ?>
    </body>
</html>
