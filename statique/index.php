<?php

require_once 'Commande.php';

// opérateur de résolution de portée :: pour accéder
// à la constante définie dans la classe
echo Commande::TAUX_TVA;


//un attribut statique peut être accéder directement depuis la classe
echo '<br>' . Commande ::$defautStatut;

$commande = new Commande();

echo '<br>' . $commande->getStatut();

//fatal error : l'attribut est privé
//echo Commande::$nbCommandes;

echo '<br>' . Commande::getNbCommandes();

$commande2 = new Commande();

echo '<br>' . Commande::getNbCommandes();

//Fatal error, cf le contrôle dans le setter
//$commande->setStatut('Délivré');