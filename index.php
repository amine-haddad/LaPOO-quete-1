<?php

require 'Car.php';
require_once 'Bicycle.php';

$bike1= new Bicycle ('black','1');
$bike2= new Bicycle ('green','1');
$bike3= new Bicycle ('red','1');
$Car1 = new Car('red','4','gazol');
$Car2 = new Car('blue','4','fuel');
$Car3 = new Car('yellow','4','Electric');

echo $Car1->start();
echo $Car1->forward();
echo $Car1->setCurrentSpeed(50);
echo '<br> Vitesse de la voiture: ' . $Car1->getCurrentSpeed(). ' km/h' . '<br>';

echo $Car1->brake();

echo '<br> Vitesse de la voiture : ' . $Car1->getCurrentSpeed() . ' km/h' . '<br>';

echo $Car1->brake().'<br>';

echo $bike1->forward();
echo $bike1->setCurrentSpeed(10);
echo '<br> Vitesse du vélo : ' . $bike1->getcurrentSpeed() . ' km/h' . '<br>';

echo $bike1->brake();

echo '<br> Vitesse du vélo : ' . $bike1->getcurrentSpeed() . ' km/h' . '<br>';

echo $bike1->brake().'<br>';
