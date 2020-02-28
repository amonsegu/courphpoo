<?php


require_once 'Joueur.php';

$joueur1 = new Joueur('Ben');
$joueur2 = new Joueur('Thomas');

$joueur1->frapper($joueur2, 'fort');
echo 'pts de vie : ' . $joueur2->getPointsVie() . '<br>';

$joueur1->frapper($joueur2, 'moyen');
echo 'pts de vie : ' . $joueur2->getPointsVie() . '<br>';

$joueur1->frapper($joueur2, 'fort');
echo 'pts de vie : ' . $joueur2->getPointsVie() . '<br>';