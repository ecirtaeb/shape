<?php
include 'public/dessiner.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Shape</title>
	<link rel="stylesheet" type="text/css" href="shape.css">
</head>
<body>
	<h1>Ouah c'est joulie ! </h1>

	<svg>
  		<?= $carre1->draw() ?>
  		<?= $rect1->draw() ?>
  		<?= $rect2->draw() ?>
  		<?= $rond1->draw() ?>
  		<?= $rond2->draw() ?>
		<?= $rond3->draw() ?>
		<?= $rond4->draw() ?>
  		<?= $ellipse1->draw() ?>
  		<?= $ellipse2->draw() ?>
  		<?= $triangle1->draw() ?>
		<?= $triangle2->draw() ?>
		<?= $triangle3->draw() ?>
	</svg> 

</body>
</html>
