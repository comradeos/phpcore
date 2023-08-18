<?php

class Person
{
    public int $id;
    public string $name;

    public function __construct(int $id, string $name)
    {
            $this->id = $id;
            $this->name = $name;
    }

    public function printInfo(): void
    {
        echo "<hr>$this->id<hr>$this->name<hr>";
    }
}