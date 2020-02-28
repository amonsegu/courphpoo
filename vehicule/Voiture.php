<?php


class Voiture extends Vehicule
{
    /**
     * @var int
     */
private $roue = 4;


    /**
     * @return int
     */
    public function getRoue(): int
    {
        return $this->roue;
    }





}