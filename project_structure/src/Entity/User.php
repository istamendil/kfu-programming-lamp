<?php


namespace Acme\Entity;


class User
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __toString(){
        return $this->name;
    }
}
