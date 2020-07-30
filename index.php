<?php

require "Animal.php";
require "Ape.php";
require "Frog.php";

$sheep = new Animal("shaun", 2, "false"); //object 1
$ular = new Animal("Ular", 0, "True"); //object 2

echo "<H3>HEWAN</H3>";

// release 0
echo "<H3>Release 0</H3>";
echo "Name : " . $sheep->getName() . "<br>";
echo "Legs : " . $sheep->getLegs() . "<br>";
echo "Cold Blooded : " . $sheep->getColdBlooded();

echo "<br>";
echo "<br>";
echo $sheep->Animals() . "<br>";
echo $ular->Animals();

// end of release 0

// release 1
echo "<br>";
echo "<H3>Release 1</H3>";

$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->name . "<br>";
echo "Sound : " . $sungokong->Yell();

echo "<br><br>";

$kodok = new Frog("buduk");
echo "Name : " . $kodok->name . "<br>";
echo "Jump : " . $kodok->Jump();

// end of release 1