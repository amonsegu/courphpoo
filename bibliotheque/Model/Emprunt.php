<?php


namespace Model;


class Emprunt
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var Livre|null
     */
    private $livre;

    /**
     * @var Abonne|null
     */
    private $abonne;

    /**
     * @var \DateTime|null
     */
    private $dateSortie;

    /**
     * @var \DateTime|null
     */
    private $dateRendu;

}