<?php

require_once '../Model/rectangulo.php';


$base = $_POST['base'];
$altura = $_POST['altura'];

$resultPerimeter = new Rectangulo($base,$altura);

echo $resultPerimeter->getBase() ."<br>";

echo $resultPerimeter->getAltura(). "<br>";


echo "resultado de rectangulo <br>";

echo "Area ".$resultPerimeter->areaRectangulo() ."<br>";

echo "Perimetro". $resultPerimeter->CalculatePerimeterRectangulo();


