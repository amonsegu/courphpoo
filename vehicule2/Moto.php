<?php
require_once 'Vehicule.php';

  class Moto extends Vehicule
{

    const NB_ROUES = 2;

    public function getNBRoues() :int
    {
        return self::NB_ROUES;
    }
}