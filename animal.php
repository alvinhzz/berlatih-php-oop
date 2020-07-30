<?php

class Animal
{
    public $name, $legs, $coldBlooded;

    public function __construct($nama, $kaki, $berdarahDingin)
    {
        $this->name = $nama;
        $this->legs = $kaki;
        $this->coldBlooded = $berdarahDingin;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLegs()
    {
        return $this->legs;
    }

    public function getColdBlooded()
    {
        return $this->coldBlooded;
    }
}
