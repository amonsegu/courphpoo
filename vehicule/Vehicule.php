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

    /**
     * @var int
     */
    private $contenu;

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
        $this->contenu = $contreservoir;
    }


    //----------------------Getter&Setter-----------------------------------------------------
//Get&Set-Vitessemax--------------------------------------------------------------------------
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


//Get&Set-Carburant--------------------------------------------------------------------------
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


//Get&Set-contreservoir-----------------------------------------------------------------------
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

//Get&Set-NomConstructeur--------------------------------------------------------------------
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


//Get&Set-Vitesse---------------------------------------------------------------------------
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
        if($vitesse >= $this->vitessemax)
        {
            $this->vitesse = $this->vitessemax;
            echo "La vitesse est a son maximum";
            return $this;
        }
        if($this->contenu <= 0)
        {
            $this->vitesse = 0;
            echo "on a plus d'essence Bordel !";
        }
        $this->vitesse = $vitesse;
        echo 'la voiture accelere sa vitesse est de : ' . $this->vitesse;
        return $this;
    }


//Get&Set-Contenu------------------------------------------------------------------------
    /**
     * @return int
     */
    public function getContenu(): int
    {
        return $this->contenu;
    }

    /**
     * @param int $contenu
     * @return Vehicule
     */
    public function setContenu(int $contenu): Vehicule
    {
        if($contenu > $this->contreservoir)
        {
            $this->contenu = $this->contreservoir;
            echo "le reservoir est plein";
            return $this;
        }
        if($contenu <= 0)
        {
            $this->contenu = 0;
            echo "Le reservoir est vide";
            return $this;
        }

        $this->contenu = $contenu;
        return $this;
    }


    //------------------------------------------------------------FUNCTION

    public function accelerer(int $vitesseaccel)
    {
        $this->setVitesse($this->vitesse+$vitesseaccel);
        $consactuel = ((10 * $this->vitesse) / 20);
        $this->setContenu($this->contenu-$consactuel);
    }




}