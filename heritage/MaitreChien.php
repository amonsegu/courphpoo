<?php

class MaitreChien
{
    /**
     * @var Chien|null
     */
    private $Chien;

    /**
     * @return Chien|null
     */
    public function getChien(): ?Chien
    {
        return $this->Chien;
    }

    /**
     * @param Chien|null $Chien
     * @return MaitreChien
     */
    public function setChien(?Chien $Chien): MaitreChien
    {
        $this->Chien = $Chien;
        return $this;
    }

    public function carresserChien()
    {
        //si l'attribut chien a été setté:
        if(!is_null($this->Chien))
        {
            echo $this->Chien->crier();
        }
        else //sinon si il n'y a pas de chien
        {
            echo "Je n'ai pas encore de chien";
        }
    }


}