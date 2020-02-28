<?php
require_once 'Animal.php';
/** Class Chien...*/
class Chien extends Animal
{

    /**
     * @inheritDoc
     */
    public function crier(): string
    {
        return 'Ouaf';
    }
}