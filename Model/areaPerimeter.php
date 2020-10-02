<?php

Class perimeterArea{
    private $radio;
   
    public function __construct($radio){
        $this->radio = $radio;        
    }

    //getters

    public function getRadio()
    {
        return $this->radio;
    }         

    //setters

    public function setRadio($radio)
    {
        $this->radio = $radio;

        return $this;
    }   

    // own function 
    
    //Rectangulo

    public function areaCirculo(){
        $area= ((pow($this->radio, 2)) * pi());        
        return round($area);
    }

    public function CalculatePerimeterCirculo(){
        $r = $this->radio;        
        $result = 2 * pi() * $r;
        return round($result);
    }

}
