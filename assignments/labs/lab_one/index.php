<?php 
declare(strict_types=1);
require "car.php";
require "connect.php";
require "header.php"; 
// echo "<p> Follow the instructions outlined in instructions.txt to complete this lab. Good luck & have fun!😀 </p>";

//Creating a new car object
$myCar = new Car("Subaru", "Outback", 2025);

//Displaying the car information.
echo "<p>" . $myCar->getCarInfo ()."</p>";
require "footer.php"; 

//I quite enjoyed doing this lab. It was a good refresher on OOP concepts and I enjoyed the process of learning them in PHP. The part that got me a few times was just basic syntax errors, so I had to go through my code carefully a few times to find issues!