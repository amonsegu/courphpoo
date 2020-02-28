<?php
include_once 'Vehicule.php';

class Moto extends Vehicule
{

    private $roue = 2;

    /**
     * @return int
     */
    public function getRoue(): int
    {
        return $this->roue;
    }



}