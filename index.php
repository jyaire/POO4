<?php
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Skateboard.php';

$rockridder = new Bicycle('blue', '1', 'human');
$rockridder->forward();

var_dump($rockridder);

echo 'Mon vélo va à 15 km/h.';
if($rockridder->switchOn() == true)
    echo "Lumière allumée";
else
    echo "Pas de lumière, tu vas trop doucement";

echo '<br><br>Mon vélo va à 5 km/h.';
$rockridder->setCurrentSpeed(5);
if($rockridder->switchOn() == true)
    echo "Lumière allumée";
else
    echo "Pas de lumière, tu vas trop doucement";

$honda = new Bicycle('white', '4', 'Essence');
$honda->forward();

var_dump($honda);

echo 'Ma voiture va à 15 km/h.';
if($honda->switchOn() == true)
    echo "Lumière allumée";
else
    echo "Pas de lumière, tu vas trop doucement";

echo '<br><br>Ma voiture va à 150 km/h.';
$honda->setCurrentSpeed(150);
if($honda->switchOn() == true)
    echo "Lumière allumée";
else
    echo "Pas de lumière, tu vas trop doucement";



