<?php
require_once 'Book.php';

$zadig = new Book();

//on utilise le setter pour affecter une valeur à l'attribut
$zadig->setAuthor('Voltaire');

//le getter nous permet d'accéder à la valeur de l'attribut privé auteur
echo $zadig->getAuthor();

$emile = new Book();

//appel chainé aux setters grâce aux return $this dans les méthodes
// = interface fluide
$emile
    ->setAuthor('Rousseau')
    ->getNbPage(300)
    ;

//Fatal error : le setter attend un objet DateTime
//$emile->setPublicationDate('1750-05-01');

$emile->setPublicationDate(new Datetime('1750-05-01'));
echo '<br>';
//appel de la méthode format() de l'objet DateTime contenu dans l'attribut
echo $emile->getPublicationDate()->format('d/m/Y');

//fatal error: getPublicationDate() retourne null et non un objet DateTime
//echo $zadig->getPublicationDate()->format('d/m/Y');
echo '<br>';
echo $zadig->getPublicationDateAsString();