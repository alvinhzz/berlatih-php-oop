<?php

class Animal
{
    public $name, $legs, $coldBlooded; //property

    public function __construct($nama, $kaki, $berdarahDingin) //constructor method
    {
        $this->name = $nama;
        $this->legs = $kaki;
        $this->coldBlooded = $berdarahDingin;
    }

    public function getName() //method for returning name data
    {
        return $this->name;
    }

    public function getLegs() //method for returning legs data
    {
        return $this->legs;
    }

    public function getColdBlooded() //for returning blooded data
    {
        return $this->coldBlooded;
    }

    public function Animals()
    {
        $animals = "Nama hewan ini adalah $this->name, ia merupakan hewan berkaki $this->legs";

        return $animals;
    }
}
