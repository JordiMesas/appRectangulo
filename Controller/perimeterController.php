<?php

require_once '../Model/areaPerimeter.php';


$radio = $_POST['radio'];


$resultPerimeterArea = new perimeterArea($radio);

echo $resultPerimeterArea->getRadio() ." de radio <br>";

echo "resultado de Circulo <br>";

echo "Area ".$resultPerimeterArea->areaCirculo() ."<br>";

echo "Perimetro ". $resultPerimeterArea->CalculatePerimeterCirculo();


