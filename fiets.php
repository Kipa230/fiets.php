<?php 


class brommer
{
    private $model = ""; 
    private $uitvoering = "";
    private $color= "";
    private $windscherm= 0;
    private $img= "";
    function __construct ($model, $uitvoering, $color, $windscherm)
    {
        $this ->model = $model;
        $this ->uitvoering= $uitvoering;
        $this ->color = $color;
        $this ->windscherm = $windscherm;
    }
    function getModel()
    {
        return $this -> model;

    }
    function getUitvoering()
    {
        return $this -> uitvoering;
    }
    function getColor()
    {
        return $this -> color;
    }
    function getScherm()
    {
        return $this -> windscherm;
    }

    function setImage($img)
    {
        $this -> img = $img; 
    }
    

    


}
?>