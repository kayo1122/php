<?php

// index.php/Main entry point for Lab One

require "header.php";
require "car.php";
require "connect.php";

// Create a new Car object
$myCar = new Car("Honda", "Civic", 2020);
?>

<p>Follow the instructions outlined in instructions.txt to complete this lab. Good luck & have fun! 😀</p>

<h2>Car Information</h2>
<p>
    <?php
    // Display car information in the browser
    echo $myCar->getCarInfo();
    ?>
</p>

<?php
