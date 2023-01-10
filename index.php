<?php

include("fiets.php");
$brommer = new brommer ("vespa", "vrouwscooter", "zwart", 0,);
$model = $brommer -> getModel();
echo "$model <br>";

$uitvoering = $brommer -> getUitvoering();
echo "$uitvoering <br>";

$color = $brommer -> getColor();
echo "$color <br>";

$windscherm = $brommer -> getScherm();
echo "$windscherm <br>";

$brommer->setImage("oranje.png");
echo "<br/>";
echo "<img src='".$brommer  ->getImage()."' alt='oranje fiets'>";



?>