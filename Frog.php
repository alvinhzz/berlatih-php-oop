<?php
class Frog extends Animal
{
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function Jump()
    {
        $text = "hop hop";
        return $text;
    }
}
