<?php
include 'class/point.php';
include 'class/shape.php';
include 'class/rectangle.php';
include 'class/square.php';
include 'class/ellipse.php';
include 'class/circle.php';
include 'class/triangle.php';


$carre1 = new Square();
$carre1->setPos([100,300]);

$rect1 = new Rectangle();
$rect1->setColor('turquoise');
$rect1->setOpacity(0.7);
$rect1->setPos([600,150]);
$rect1->setSize([50,100]);

$rect2 = new Rectangle();
$rect2->setColor('turquoise');
$rect2->setOpacity(0.5);
$rect2->setPos([650,250]);
$rect2->setSize([60,120]);


$rond1 = new Circle();
$rond1->setColor('blue');
$rond1->setOpacity(0.8);
$rond1->setPos([200,400]);
$rond1->setRay([60,0]);

$rond2 = new Circle();
$rond2->setColor('blue');
$rond2->setOpacity(0.6);
$rond2->setPos([400,400]);
$rond2->setRay([50,0]);


$rond3 = new Circle();
$rond3->setColor('blue');
$rond3->setOpacity(0.4);
$rond3->setPos([600,400]);
$rond3->setRay([40,0]);

$rond4 = new Circle();
$rond4->setColor('blue');
$rond4->setOpacity(0.2);
$rond4->setPos([800,400]);
$rond4->setRay([30,0]);

$ellipse1 = new Ellipse();
$ellipse1->setColor('yellow');
$ellipse1->setOpacity(0.8);
$ellipse1->setPos([600,100]);

$ellipse2 = new Ellipse();
$ellipse2->setColor('olive');
$ellipse2->setOpacity(0.5);
$ellipse2->setPos([550,320]);
$ellipse2->setRay([400,60]);

$triangle1 = new Triangle();
$triangle1->setColor('black');
$triangle1->setOpacity(0.2);
$triangle1->setPos([500,0]);
$triangle1->setPoints([0,50,100,150]);

$triangle2 = new Triangle();
$triangle2->setColor('silver');
$triangle2->setOpacity(0.2);
$triangle2->setPos([510,0]);
$triangle2->setPoints([120,150,200,180]);

$triangle3 = new Triangle();
$triangle3->setColor('brown');
$triangle3->setOpacity(0.2);
$triangle3->setPos([400,350]);
$triangle3->setPoints([120,150,200,180]);


?>
