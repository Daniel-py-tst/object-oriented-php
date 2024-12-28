<?php

namespace App;

class Invoice
{
    public function __get(string $name)
    {
        if(property_exists($this, $name)){
            return $this->$name;
        }

        return null; 
    }

    public function __set(string $name, $value): void
    {
        var_dump($name, $value);
    }
}