<?php
class Ape extends Animal
{
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function Yell()
    {
        $text = "Auooo";
        return $text;
    }
}
