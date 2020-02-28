<?php


class Maitre
{
    /**
     * @var animal|null
     */
    private $animal;

    /**
     * @return animal|null
     */
    public function getAnimal(): ?animal
    {
        return $this->animal;
    }

    /**
     * @param animal|null $animal
     * @return Maitre
     */
    public function setAnimal(?animal $animal): Maitre
    {
        $this->animal = $animal;
        return $this;
    }


}