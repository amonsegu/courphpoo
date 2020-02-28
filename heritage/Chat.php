<?php
require_once 'Animal.php';
/** Class Chat ...*/
class Chat extends Animal
{

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
}