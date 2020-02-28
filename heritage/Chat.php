<?php
require_once 'Animal.php';
/** Class Chat ...*/
class Chat extends Animal
{
    /**
     * @var string|null
     */
    private $couleurYeux;

    /**
     * @var string|null
     */
    protected $longeurPoils;

    /**
     * @return string|null
     */
    public function getLongeurPoils(): ?string
    {
        return $this->longeurPoils;
    }

    /**
     * @param string|null $longeurPoils
     * @return Chat
     */
    public function setLongeurPoils(?string $longeurPoils): Chat
    {
        $this->longeurPoils = $longeurPoils;
        return $this;
    }



    /**
     * @return string|null
     */
    public function getCouleurYeux(): ?string
    {
        return $this->couleurYeux;
    }

    /**
     * @param string|null $couleurYeux
     * @return Chat
     */
    public function setCouleurYeux(?string $couleurYeux): Chat
    {
        $this->couleurYeux = $couleurYeux;
        return $this;
    }



    /**
     * Surcharge de la méthode définie dans Animal (=redéfinition)
     *
     * @return string
     */
    public function sePresenter()
    {
        //parent fait référence à la classe dont on hérite
        //S'utilise toujours avec ::
        return parent::sePresenter() . ' et je suis un chat';
    }

    /**
     * @inheritDoc
     */
    public function crier(): string
    {
        return 'Miaou';
    }

    final public function ronronner()
    {
        echo 'Ronron';
    }
}