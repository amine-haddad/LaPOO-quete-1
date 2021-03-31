<?php
require_once 'Bicycle.php';
$Car1 = new Car('red',4,'gazol');
$Car2 = new Car('blue',4,'fuel');
$Car3 = new Car('yellow',4,'Electric');
$bike1= new Car('black','1', 'feet');
$bike2= new Car('green','1', 'feet');
$bike3= new Car('red','1', 'feet');

var_dump($Car1);



// Moving bike
//var_dump();


echo $bike1-> start();
echo $bike1-> forward();
$bike1-> getCurrentSpeed();
echo '<br> Vitesse du Car1 : ' . $bike1-> forward(). ' km/h' . '<br>';
echo $bike1->brake();
echo '<br> Vitesse du Car1: ' . $bike1-> getCurrentSpeed().' km/h' . '<br>'; 
echo $bike1->brake().'</br></br>';

echo $Car1-> start();
echo $Car1->forward();
$Car1->getCurrentSpeed();
echo '<br> Vitesse du vélo : ' . $bike1-> forward(). ' km/h' . '<br>';
echo $Car1->brake();
echo '<br> Vitesse du vélo : ' . $Car1->getCurrentSpeed() . ' km/h' . '<br>'; 
echo $Car1->brake();

