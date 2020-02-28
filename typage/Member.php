<?php

/**
 * Class Member
 */
class Member
{
    /**
     * @var string
     */
    public $firstname = 'Ben';
    /**
     * @var string|null
     */
    public $lastname;

    /**
     * @var DateTime
     */
    public $birthDate;

    /**
     * le : string désigne la valeur de retour de la méthode
     *
     * @return string
     */
    public function getFullname(): string
    {
        return rtrim($this->firstname . ' ' . $this->lastname);
    }

    /**
     * Typage sur le nom d'une classe
     *
     * @return DateTime
     */
    public function getbirthDate(): ?DateTime
    {
        return $this->birthDate;
    }

    /**
     * void quand la méthode retourne null
     *
     * @param int $augmentation
     */
    public function augmenter(int $augmentation) :void
    {
        $this -> salaire += $augmentation;
    }

}
