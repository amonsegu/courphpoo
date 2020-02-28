<?php


abstract class Vehicule
{
    //----------------------------------------Vitessemax
    /**
     * @var int
     */
    private $vitessemax;

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



    //----------------------------------Carburant

    /**
     * @var string
     */
    private $typecarburant;

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

    //-----------------------------Nombrederoues

    /**
     * @var int
     */
    private $nombreroues;

    /**
     * @return int
     */
    public function getNombreroues(): int
    {
        return $this->nombreroues;
    }

    /**
     * @param int $nombreroues
     * @return Vehicule
     */
    public function setNombreroues(int $nombreroues): Vehicule
    {
        $this->nombreroues = $nombreroues;
        return $this;
    }

    //--------------------------contreservoir

    /**
     * @var int
     */
    private $contreservoir;

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

    //--------------------------Nom constructeur

    /**
     * @var string
     */
    private $constructeur;

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


}