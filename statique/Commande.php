<?php

/**
 * Class Commande
 */
class Commande
{
    /**
     * Constante de classe
     */
    const TAUX_TVA = 20;

    private $statut;

    public static $defautStatut = 'En cours';

    public static $statutsPossibles = [
        'En cours',
        'expédiée',
        'Annulée',
    ];

    /**
     * @var int
     */
    private static $nbCommandes = 0;

    /**
     * Constructeur : méthode appelée automatiquement
     * à l'instanciation
     */
    public function __construct()
    {
        //self = la classe dans laquelle on se trouve
        $this->statut = self :: $defautStatut;

        self::$nbCommandes++;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     * @return Commande
     */
    public function setStatut($statut)
    {
        if (!in_array($statut, self::$statutsPossibles)){
            trigger_error('Statut non reconnu', E_USER_ERROR);
        }
        $this->statut = $statut;
        return $this;
    }

    /**
     * @return int
     */
    public static function getNbCommandes(): int
    {
        return self::$nbCommandes;
    }


}