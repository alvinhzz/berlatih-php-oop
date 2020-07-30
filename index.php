<?php

require "animal.php";

$sheep = new Animal("shaun", 2, "false");

echo $sheep->getName() . "<br>";
echo $sheep->getLegs() . "<br>";
echo $sheep->getColdBlooded();
