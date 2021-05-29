<?php

namespace ProgrammerZamanNow\Data;

class People
{

    private $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(String $name)
    {
        echo "Hello $name My Name is $this->name";
    }

}
