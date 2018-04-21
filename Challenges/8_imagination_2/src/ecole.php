<?php

class ecole
{
    protected $className;
    protected $peoplenumbre;

    public function __construct(int $peoplenumbre, string $className)
    {
        $this->peoplenumbre = $peoplenumbre;
        $this->className = $className;
    }

    public function __toString()
        {
            return "La classe s'appelle : ".$this->className.". Il y a ".$this->peoplenumbre." éléves.";

        }


}
