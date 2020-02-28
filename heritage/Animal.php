<?php

/** Class Animal
 * Une classe abstraite est une classe que l'on ne peut pas instancier elle ne sert qu'a
 * etre instancier
 */
abstract class Animal
{
    /**
     * @var string|null
     */
    private $nom;

    public function __construct(string $nom =null)
    {
        $this->setNom($nom);
    }

    /**
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string|null $nom
     * @return Animal
     */
    public function setNom(?string $nom): Animal
    {
        $this->nom = $nom;
        return $this;
    }

    public function sePresenter()
    {
        return 'Je suis un animal';
    }

    /**
     * Méthode abstraite (sans contenu)
     * Cette méthode doit être implémentée (définie avec un contenu)
     * dans toute les classes qui héritent d'Animal
     * @return string
     */
    abstract public function crier(): string;


}