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

require_once 'Vehicule.php';
require_once 'Voiture.php';
require_once 'Moto.php';
require_once 'Pompe.php';

$voiture1 = new Voiture(200, 'essence',150,'peugeot');
$voiture2 = new Voiture(210, 'Diesel',150,'renault');

echo $voiture1->getRoue();
echo "<br>";
echo $voiture1->getContreservoir();
echo "<br>";
echo $voiture1->getTypecarburant();
echo "<br>";
echo $voiture1->getConstructeur();
echo "<br>";
echo $voiture1->getVitessemax();
echo "<br>";
echo $voiture1->getVitesse();
echo $voiture1->getContenu();
echo'<br><br><br>';

$voiture1->accelerer(20);
echo '<br>';
$voiture1->accelerer(200);
echo "<br>";
echo $voiture1->getContenu();


echo'<br><br><br>';

$moto1 = new Moto(250,'essence', 50,'ducati');
echo $moto1->getRoue();
echo "<br>";
echo $moto1->getContreservoir();
echo "<br>";
echo $moto1->getTypecarburant();
echo "<br>";
echo $moto1->getConstructeur();
echo "<br>";
echo $moto1->getVitessemax();

echo'<br><br><br>';

