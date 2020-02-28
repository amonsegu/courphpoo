<?php
require_once 'Chat.php';

final class Siamois extends Chat
{
    /*
     *
     * La méthode ronronner héritée de Chat ne peut pas être surchargée car déclarée finale
     *
    public function ronronner()
    {
        echo 'Ronronron';
    }
    */

    public function direCouleurYeux()
    {

        //l'attribut couleurYeux est déclaré privé dans Chat
        //et donc n'est pas connu dans Siamois :
        //echo "j'ai les yeux de couleur " . $this->>couelurYeux;

        //on doit utiliser le getter pour y accéder
        echo "j'ai les yeux " . $this->getCouleurYeux();
    }

    public function direLongueurPoils()
    {
        //l'attribut longeurPoils est déclaré protégé dans Chat
        //et donc utilisable dans les méthodes de ses classe filles :
        echo "j'ai les poils " . $this->longeurPoils;
    }

}