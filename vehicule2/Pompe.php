<?php


class Pompe
{
    /**
     * @var string
     */
    private $typeCarburant;

    /**
     * @var int
     */
    private $contenanceCuve;

    /**
     * @var int
     */
    private $contenuCuve;


    public function __construct(
        string $typeCarburant,
        int $contenanceCuve,
        int $contenuCuve
    ){
        $this
            ->setTypeCarburant($typeCarburant)
            ->setContenanceCuve($contenanceCuve)
            ->setContenuCuve($contenuCuve);

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
     * @return Pompe
     */
    public function setTypeCarburant(string $typeCarburant): Pompe
    {
        $this->typeCarburant = $typeCarburant;
        return $this;
    }

    /**
     * @return int
     */
    public function getContenanceCuve(): int
    {
        return $this->contenanceCuve;
    }

    /**
     * @param int $contenanceCuve
     * @return Pompe
     */
    public function setContenanceCuve(int $contenanceCuve): Pompe
    {
        $this->contenanceCuve = $contenanceCuve;
        return $this;
    }

    /**
     * @return int
     */
    public function getContenuCuve(): int
    {
        return $this->contenuCuve;
    }

    /**
     * @param int $contenuCuve
     * @return Pompe
     */
    public function setContenuCuve(int $contenuCuve): Pompe
    {
        $this->contenuCuve = $contenuCuve;
        return $this;
    }



    
}