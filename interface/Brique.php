<?php

require_once 'Volume.php';
require_once 'Texture.php';
require_once 'Cube.php';
require_once 'Brique.php';

/**
 * Une classe peut implémenter plusieurs interfaces
 * elle doit dans ce cas implémenter les méthodes
 * de chacune des interfaces qu'elle implémente
 *
 */
class Brique implements Volume, Texture
{

    public function getMatiere(): string
    {
        return 'terre';
    }

    public function getCouleur(): string
    {
        return 'rouge';
    }

    public function getForme(): string
    {
        return 'parallélépipède rectangle';
    }
}