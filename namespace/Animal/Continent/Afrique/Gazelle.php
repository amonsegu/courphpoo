<?php


namespace Animal\Continent\Afrique;


class Gazelle
{
    public function voirElephant()
    {
        /**
         * Animal\Continent\Afrique\Elephant
         * car sans usen la classe est celle qui se trouve
         * dans le namespace dans lequel on est
         */
        $elephant = new Elephant();
        echo 'Je vois un éléphant avec de '
        .$elephant->getTailleOreilles()
            . 'oreilles';
    }

    public function etreVue()
    {
        /*
         * l'antislash initial fait revenir à la racine des namespaces
         * ici la classe Toursite sans namespace
         *
         * L'alternative est de mettre un 'use Touriste;' en haut de fichier
         */
        $touriste = new \Touriste();

        $touriste->voirGazelle();
    }
}