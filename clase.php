<?php
/**
* Ficheiro coa definición da clase <b>Coche</b> e os seus derivados . 
* Define a clase Coche xunto coas súas propiedades, construtor e métodos tendo en consideración 
* @package JMRR 
* @license https://creativecommons.org/licenses/by-sa/4.0/legalcode Creative Commons 4.0 Attributioin ShareAlike 
* @author __________________ <jose______@edu.xunta.es> 
* @version Version 0.0.1 */


class Coche{
    
    /** 
     * Atributos
     * @var string $modelo Indica o modelo do coche  
     * @var string $color Indica o color do coche 
     * @var int $velocidad Indica a velocidade do coche 
     * @var double $precio Indica o precio fijo do coche 
     *      
     */
    
    private $modelo;
    private $color;
    public $velocidad;
    const precioc=1000;


   /**
    * Construtor da clase Figura
    * @param string $modelo Nome da figura
    * @param string $color Nome da figura
    * @param double $velocidad Nome da figura
    * @return void
    *  */ 
    
   public function __construct($modelo, $color, $velocidad = 0){
        $this->modelo = $modelo;
        $this->color = $color;
        $this->velocidad = $velocidad;
		
	    }
    
    /**
     * Getter da propiedade modelo do coche 
     * @return string color o contido da propiedade $color
     *  */
    public function getModelo(){
    // Devolvemos un atributo
        return $this->modelo;
    }
   
    /**
    * Setter da propiedade modelo
    * @param string
    * @return void
    */
    public function setModelo($modelo){
    //establecemos, le damos un valor a un atributo
        $this->modelo = $modelo;
    }
        
    /**
     * Getter da propiedade color do coche 
     * @return string color o contido da propiedade $color
     *  */
    public function getColor(){
    // Devolvemos un atributo
        return $this->color;
    }
    /**
    * Setter da propiedade color
    * @param string
    * @return void
    */
    public function setColor($color){
    //establecemos, le damos un valor a un atributo
        $this->color = $color;
    }
    /**
     * Getter da propiedade velocidad do coche 
     * @return double velocidad o contido da propiedade $velocidad
     *  */ 
    public function getVelocidad(){
        return $this->velocidad;
    } 
   
  /** 
   * Funcion acellerar incrementamos la velocidad
   * @return double velocidad 
   */  
    public function acelerar(){
        $this->velocidad++;
    }
    /** 
   * Funcion frenar reducimos la velocidad
   * @return double velocidad 
   */
   public function frenar(){
        $this->velocidad--;
    }
     /** 
   * Funcion metodo mostrar información
   * @return string $info con toda la información 
   */   
    //Metodo para mostrat toda la información de la clase coche
    public function mostrarInfo(){
         
        // Llamamos a otros métodos
        $info = "<h1>Información del coche:</h1>";
        $info.= "Modelo: ".$this->modelo;
        $info.= "<br/> Color: ".$this->getColor();
        $info.= "<br/> Velocidad: ".$this->getVelocidad();
        return $info;
    }
    
/**    
* Otros metodos
* Funciones del ejercicio   
*  
* 1.	Averiguar se unha palabra é un palíndromo
* 2.	Averiguar se un número dado é primo
* 3.	Dados dous números indicar cal é o maior
* 4.	Resolver unha ecuación de primeiro grao do tipo ax+b=0
* 5.	Dado un ano saber se é bisesto ou non
 */
  
////////////////////////////////////////1 palindroma//////////////////////////
    
/**
* Ficheiro coa definición da funcion palindroma
* Define di si é polindroma ou non 
* @package Proxecto1 
* @license https://creativecommons.org/licenses/by-sa/4.0/legalcode Creative Commons 4.0 Attributioin ShareAlike 
* @author __________________ <jose______@edu.xunta.es> 
* @version Version 0.0.1 
* @return  true o false
*   */    
        
     public function isPalindrome($str){ 
        if(is_string($str) && strlen($str) > 1){  
            $r = array('/á/'=>'a','/é/'=>'e','/í/'=>'i','/ó/'=>'o','/ú/'=>'u','/ü/'=>'u', 
            '/Á/'=>'a','/É/'=>'e','/Í/'=>'i','/Ó/'=>'o','/Ú/'=>'u','/Ü/'=>'u','/Ñ/'=>'ñ' 
            ); 
 
            $str = preg_replace('/[^a-zñ]/i','', preg_replace( array_keys($r), array_values($r), strtolower($str) ) ); 
            //return ($str == strrev($str)); 
			$info = "<br/><h1>Si es polindroma</h1>".$str;
                    return $info;
			
			
        } 
        $info = "<br/><h1>No es Polindroma</h1>";
                    return $info;
    }  
     
    
    
    /////////////////////////2 primo///////////////////////////////
/**
* Metodo coa funcion de calculo de numero primo. 
* Funcion que recorre todos los numero desde el 2 hasta el valor recibido
* @package JMRR 
* @license https://creativecommons.org/licenses/by-sa/4.0/legalcode Creative Commons 4.0 Attributioin ShareAlike 
* @author __________________ <jose______@edu.xunta.es> 
* @version Version 0.0.1 
* * @return  true o false
*   */   
    
public function primo($num){
   $cont=0;
   // Funcion que recorre todos los numero desde el 2 hasta el valor recibido
   for($i=2;$i<=$num;$i++)
   {
       if($num%$i==0)
       {
           //Si se puede dividir por algun numero mas de una vez, no es primo
           if (++$cont > 1) {
			   $info = "<hr><br/><h1>Es Falso, no es primo</h1>";
                    return $info;
                }
        }
   }
   $info = "<hr><br/><h1>Es Cierto, es primo</h1>";
                    return $info;
}

 
//////////////////////////////3 num mayor //////////////////////
/**
* Metodo coa funcion de calcula si o numero e maior ou menor. 
* @package JMRR 
* @license https://creativecommons.org/licenses/by-sa/4.0/legalcode Creative Commons 4.0 Attributioin ShareAlike 
* @author __________________ <jose______@edu.xunta.es> 
* @version Version 0.0.1 
* @return  string $info
*   */  
public function maior($a,$b){

$info = "<hr><br/><h1>El numero mayor es:</h1>";
if($a < $b ){
$info.= "<br/>El num B ".$b." es mayor que ".$a;
}
else {
    $info.= "<br/>El num A ".$a." es mayor que ".$b;
}
        return $info;
}


 //////////////////////////////4 ecuacion //////////////////////   
/**
* Metodo coa funcion que calcula una ecuacion de 1 grado. 
* @package JMRR 
* @license https://creativecommons.org/licenses/by-sa/4.0/legalcode Creative Commons 4.0 Attributioin ShareAlike 
* @author __________________ <jose______@edu.xunta.es> 
* @version Version 0.0.1 
* @return  double $x
*   */

public function ecuacion($c,$d){
// c*x+d = 0
$info = "<hr><br/><h1>La solucion a la ecuación ax+b=0 es:</h1>";
$x=-$d/$c;
$info.= "<br/>El valor de X es: ".$x;
return $info;
}


 //////////////////////////////5 bisiesto///////////////////////
/**
* Metodo coa funcion de calculo do ano bisiesto. 
* Funcion cálculo dun año si es bisiesto ou non
* @package JMRR 
* @license https://creativecommons.org/licenses/by-sa/4.0/legalcode Creative Commons 4.0 Attributioin ShareAlike 
* @author __________________ <jose______@edu.xunta.es> 
* @version Version 0.0.1 
* @return  $year
*   */

function esBisiesto($year=NULL) {
    $year = ($year==NULL)? date('Y'):$year;
    return ( ($year%4 == 0 && $year%100 != 0) || $year%400 == 0 );
	
}
    
    
    
}   
////////////////////////////////////////////////    

?>
