<?php


class Pompe
{
    /**
     * @var string
     */
    private $carburant1 = 'diesel';
    /**
     * @var string
     */
    private $carburant2 = 'essence';

    /**
     * @var int
     */
    private $contenance1 = 0;
    /**
     * @var int
     */
    private $contenance2 = 0;

    /**
     * @var int
     */
    private $contenu1 = 0;
    /**
     * @var int
     */
    private $contenu2 =0;

    /**
     * Pompe constructor.
     * @param string $carburant1
     * @param string $carburant2
     * @param int $contenance1
     * @param int $contenance2
     * @param int $contenu1
     * @param int $contenu2
     */
    public function __construct(string $carburant1, string $carburant2, int $contenance1, int $contenance2, int $contenu1, int $contenu2)
    {
        $this->carburant1 = $carburant1;
        $this->carburant2 = $carburant2;
        $this->contenance1 = $contenance1;
        $this->contenance2 = $contenance2;
        $this->contenu1 = $contenu1;
        $this->contenu2 = $contenu2;
    }
//--------------------------Getter & Setter---------------------------------------------------

//----CARBURANT1
    /**
     * @return string
     */
    public function getCarburant1(): string
    {
        return $this->carburant1;
    }

    /**
     * @param string $carburant1
     * @return Pompe
     */
    public function setCarburant1(string $carburant1): Pompe
    {
        $this->carburant1 = $carburant1;
        return $this;
    }

//-----CARBURANT2
    /**
     * @return string
     */
    public function getCarburant2(): string
    {
        return $this->carburant2;
    }

    /**
     * @param string $carburant2
     * @return Pompe
     */
    public function setCarburant2(string $carburant2): Pompe
    {
        $this->carburant2 = $carburant2;
        return $this;
    }

    //-----CONTENANCE1
    /**
     * @return int
     */
    public function getContenance1(): int
    {
        return $this->contenance1;
    }

    /**
     * @param int $contenance1
     * @return Pompe
     */
    public function setContenance1(int $contenance1): Pompe
    {
        $this->contenance1 = $contenance1;
        return $this;
    }

//------CONTENANCE2
    /**
     * @return int
     */
    public function getContenance2(): int
    {
        return $this->contenance2;
    }

    /**
     * @param int $contenance2
     * @return Pompe
     */
    public function setContenance2(int $contenance2): Pompe
    {
        $this->contenance2 = $contenance2;
        return $this;
    }

//------CONTENU1
    /**
     * @return int
     */
    public function getContenu1(): int
    {
        return $this->contenu1;
    }

    /**
     * @param int $contenu1
     * @return Pompe
     */
    public function setContenu1(int $contenu1): Pompe
    {
        $this->contenu1 = $contenu1;
        return $this;
    }

//-----CONTENU2
    /**
     * @return int
     */
    public function getContenu2(): int
    {
        return $this->contenu2;
    }

    /**
     * @param int $contenu2
     * @return Pompe
     */
    public function setContenu2(int $contenu2): Pompe
    {
        $this->contenu2 = $contenu2;
        return $this;
    }



}