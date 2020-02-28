<?php


abstract class Vehicule
{
    /**
     * @var int
     */
    private $vitessemax;

    /**
     * @var string
     */
    private $typecarburant;

    /**
     * @var int
     */
    private $contreservoir;

    /**
     * @var string
     */
    private $constructeur;

    /**
     * @var int
     */
    protected $vitesse=0;

    //-------------------------Constructeur
    /**
     * Vehicule constructor.
     * @param int $vitessemax
     * @param string $typecarburant
     * @param int $nombreroues
     * @param int $contreservoir
     * @param string $constructeur
     */
    public function __construct(int $vitessemax, string $typecarburant, int $contreservoir, string $constructeur)
    {
        $this->vitessemax = $vitessemax;
        $this->typecarburant = $typecarburant;
        $this->contreservoir = $contreservoir;
        $this->constructeur = $constructeur;
    }


    //----------------------Getter&Setter
//Vitessemax
    /**
     * @return string
     */
    public function getVitessemax(): int
    {
        return $this->vitessemax;
    }

    /**
     * @param int $vitessemax
     * @return Vehicule
     */
    public function setVitessemax(int $vitessemax): Vehicule
    {
        $this->vitessemax = $vitessemax;
        return $this;
    }


//Carburant
    /**
     * @return string
     */
    public function getTypecarburant(): string
    {
        return $this->typecarburant;
    }

    /**
     * @param string $typecarburant
     * @return Vehicule
     */
    public function setTypecarburant(string $typecarburant): Vehicule
    {
        $this->typecarburant = $typecarburant;
        return $this;
    }


//contreservoir
    /**
     * @return int
     */
    public function getContreservoir(): int
    {
        return $this->contreservoir;
    }

    /**
     * @param int $contreservoir
     * @return Vehicule
     */
    public function setContreservoir(int $contreservoir): Vehicule
    {
        $this->contreservoir = $contreservoir;
        return $this;
    }

//Nom constructeur
    /**
     * @return string
     */
    public function getConstructeur(): string
    {
        return $this->constructeur;
    }

    /**
     * @param string $constructeur
     * @return Vehicule
     */
    public function setConstructeur(string $constructeur): Vehicule
    {
        $this->constructeur = $constructeur;
        return $this;
    }


//Vitesse Max
    /**
     * @return int
     */
    public function getVitesse(): int
    {
        return $this->vitesse;
    }

    /**
     * @param int $vitesse
     * @return Vehicule
     */
    public function setVitesse(int $vitesse): Vehicule
    {
        $this->vitesse = $vitesse;
        return $this;
    }




}