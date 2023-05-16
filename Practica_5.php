<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

abstract class Animal
{
protected $nombre;
private $edad;
public static $genero = "M";

public function __construct($nombre, $edad){
    $this->nombre=$nombre;
    $this->edad=$edad;
}

final public static function getGenero(){
    echo "El animal es de genero " . self::$genero;
}

public function getInfo() : void{
    echo "El animal es un $this->nombre y tiene una edad de $this-> edad años";
}

public function getEdad(): void{
    echo "la edad del animal es: $this->edad años";
}
}

class Leon extends Animal{
    public $raza;

    public function __construct($raza = " ", $nombre =" ", $edad = " "){
        $this->raza = $raza;
        parent::__construct ($nombre, $edad);
    }

    public function getInfo() : void{
        echo "El leon es de raza $this->raza, llamado $this->nombre y es del genero " . parent::$genero;
    }
}

class Tigre extends Animal{
    public function getInfor() : void{
        echo "El Tigre se llama: $this-> nombre y es del genero " . parent::$genero
    }
}

$leonRey = new Leon("Africano", "M", 5);
$leonRey->getInfo();
echo "<br>";
$leonRey->getEdad();
echo "<br>";
echo "<br>";
$elefanteGrande=new Elefante("India", 2);
$elefanteGrande->getInfo();
echo "<br>";
echo "<br>";
$elefanteGrande->getEdad();
echo "<br>";
?>