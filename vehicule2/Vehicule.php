<?php


abstract class Vehicule
{
    /**
     * @var int
     */
    private $vitesseMax;

    /**
     * @var string
     */
    private $typeCarburant;

    /**
     * @var int
     */
    private $contenanceReservoir;

    /**
     * @var int
     */
    private $contenuReservoir;
    
    private $vitesse = 0;

    private static $carburantsAcceptes = [
        'essence',
        'diesel',
    ];

    public function __construct(
        int $vitesseMax,
        string $typeCarburant,
        int $contenanceReservoir,
        int $contenuReservoir
    ){
        $this
            ->setVitesseMax($vitesseMax)
            ->setTypeCarburant($typeCarburant)
            ->setContenanceReservoir($contenanceReservoir)
            ->setContenuReservoir($contenuReservoir);
    }

//-----------------------------Getter&Setter----------------------------------------------
    /**
     * @return int
     */
    public function getVitesseMax(): int
    {
        return $this->vitesseMax;
    }

    /**
     * @param int $vitesseMax
     * @return Vehicule
     */
    public function setVitesseMax(int $vitesseMax): Vehicule
    {
        $this->vitesseMax = $vitesseMax;
        return $this;
    }

    /**
     * @return string
     */
    public function getTypeCarburant(): string
    {

        return $this->typeCarburant;
    }

    /**
     * @param string $typeCarburant
     * @return Vehicule
     */
    public function setTypeCarburant(string $typeCarburant): Vehicule
    {
        if(!in_array($typeCarburant, self::$carburantsAcceptes)){
            trigger_error('Type de carburant refusé', E_USER_ERROR);
        }
        $this->typeCarburant = $typeCarburant;
        return $this;
    }

    /**
     * @return int
     */
    public function getContenanceReservoir(): int
    {
        return $this->contenanceReservoir;
    }

    /**
     * @param int $contenanceReservoir
     * @return Vehicule
     */
    public function setContenanceReservoir(int $contenanceReservoir): Vehicule
    {
        $this->contenanceReservoir = $contenanceReservoir;
        return $this;
    }

    /**
     * @return int
     */
    public function getContenuReservoir(): int
    {
        return $this->contenuReservoir;
    }

    /**
     * @param int $contenuReservoir
     * @return Vehicule
     */
    public function setContenuReservoir(int $contenuReservoir): Vehicule
    {
        $this->contenuReservoir = $contenuReservoir;
        return $this;
    }

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
        if($vitesse>$this->vitesseMax){
            $vitesse = $this->vitesseMax;
        }
        $this->vitesse = $vitesse;
        return $this;
    }

    public function accelerer($acceleration)
    {
        $this->setVitesse($this->vitesse + $acceleration);
    }
    abstract public function getNBRoues():int;









}