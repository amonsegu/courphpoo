<?php
require_once 'Volume.php';

/**
 * Class Cube
 *
 * La classe Cube implémente l'interface Volume :
 * elle doit implémenter (définir avec un contenu)
 * la méthode getForme définie dans Volume
 */



class Cube implements Volume
{


    public function getForme(): string
    {
        return 'cube';
    }
}