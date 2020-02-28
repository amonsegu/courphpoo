<?php


/** Class Humain ... */
class Humain
{
    /**
     * Typage par nom de classe => $chien étant instance de Chien
     * on peut appeler sa méthode crier()
     *
     * @param chien $chien
     */
    public function donnerSucre(chien $chien)
    {
        echo $chien->crier();
    }

    /**
     * $animal doit être un objet instancier d'une classe qui hérite d'Animal
     * donc contenir la méthode définie abstraitement dans Animal
     *
     * @param Animal $animal
     */
    public function carresser(Animal $animal)
    {
        echo $animal->crier();
    }
}