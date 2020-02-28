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


$voiture = new Voiture(200, 'diesel', 80, 20);
$moto = new Moto(220, 'essence', 40, 10);

var_dump($voiture,$moto);