<?php
/*
 * Créer une classe abstraite Vehicule
 * et 2 classes qui en héritent : Moto et Voiture
 * qui doit gérer :
 * - une vitesse max
 * - un type de carburant (essence ou diesel)
 * - un nombre de roues (lié au type de véhicule)
 * - une contenance de réservoir
 * - un contenu du réservoir (la qté d'essence dedans)
 * - ajouter un constructeur
 * Instancier un véhicule de chaque type
 *
 * Ajouter la vitesse, par défaut 0
 * Implémenter une méthode accélérer avec un paramètre de combien de km/h
 * Gérer qu'on ne peut pas accélerer au delà de la vitesse max
 */

require_once 'Voiture.php';
require_once 'Moto.php';
require_once 'Pompe.php';


$voiture = new Voiture(200, 'diesel', 80, 20);
$moto = new Moto(220, 'essence', 40, 10);

var_dump($voiture,$moto);

$moto->accelerer(50);
echo $moto->getVitesse();
$moto->accelerer(70);
echo '<br>' . $moto->getVitesse(); // on est a 120
$moto->accelerer(300);
echo '<br>' . $moto->getVitesse(); // plafoné a 220 = vitessemax

$pompeEssence = new Pompe('essence', 800,200);
$pompeDiesel = new Pompe('diesel', 1000, 600);

echo'<br>Avant:<br>';
var_dump($moto, $pompeEssence);
$moto->fairePlein($pompeEssence);

echo'<br>Apres:<br>';
var_dump($moto, $pompeEssence);

echo'<br>Avant:<br>';
var_dump($voiture, $pompeEssence);
$voiture->fairePlein($pompeEssence);

echo'<br>Apres:<br>';
var_dump($voiture, $pompeEssence);


$petitePompe = new Pompe('diesel', 800,40);



