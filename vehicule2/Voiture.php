<?php
require_once 'Vehicule.php';

 class Voiture extends Vehicule
{
    const NB_ROUES = 4;

    public function getNBRoues() :int
    {
        return self::NB_ROUES;
    }
}