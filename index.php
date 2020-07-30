<?php

require "animal.php";

$sheep = new Animal("shaun", 4, "false"); //object 1
$ular = new Animal("Ular", 0, "True"); //object 2

echo $sheep->getName() . "<br>";
echo $sheep->getLegs() . "<br>";
echo $sheep->getColdBlooded();

echo "<br>";
echo "<H3>HEWAN</H3>";
echo $sheep->Animals() . "<br>";
echo $ular->Animals();
