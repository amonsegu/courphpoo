<?php
require_once 'Chat.php';
require_once 'Chien.php';
require_once 'Humain.php';
require_once 'MaitreChien.php';
require_once 'Maitre.php';
//le constructeur avec un parametre et la méthode getNom()
//viennent de la classe Animal dont hérite Chat
$chat = new Chat('hercule');
echo $chat->getNom();

//fatal error : la classe est abstraite et ne peut donc pas etre instancier
//$animal = new Animal();

$chien = new Chien('Pif');

echo'<br>' . $chien->sePresenter();


echo'<br>' . $chat->sePresenter();

echo '<br>';
$humain = new Humain();
$humain->donnerSucre($chien);
echo '<br>';

try { //test une methode
$humain->donnerSucre($chat); // erreur de typage
} catch (Error $error){ //si erreur on l'attrape
    echo 'pas de sucre pour autre chose qu\'un chien'; // et on affiche le msg choisi
}

$humain->carresser($chien);
echo'<br>';
$humain->carresser($chat);

var_dump($chat instanceof chat); // true

//parce que la classe Chat hérite d'animal:
var_dump($chat instanceof Animal); // true

//on créer un nouvelle objet chien avec le nom Milou
$milou = new Chien('Milou');
//on créer un nouvelle objet MaitreChien "tintin"
$tintin = new MaitreChien();

//on attribut le chien milou au maitre chien tintin
$tintin->setChien($milou);
echo "<br>";

//on peut faire aboyer Milou grace a crier en héritage de la classe chien:
echo $tintin->getChien()->crier();
echo "<br>";
//ou on apelle la méthode carresserChien qui fait abboyer le chien si il y en a un:
$tintin->carresserChien();

echo "<br>";
//on créer un nouveau maitrechien
$liam = new MaitreChien();
//on lui demande la méthode carresserChien qui doit faire aboyer le chien si il maitrechien
//en possede un OU sinaler que le maitre n'a pas de chien
$liam->carresserChien();

//error : $liam->getChien() retourne null
//$liam->getChien()->crier();  retourne une erreur car la méthode crier hérité de la classe
//chien n'est disponible pour le maitreChien que si il a un chien

$jon = new Maitre();
$garfield = new Chat();
$jon->setAnimal($garfield);

$higgins = new Maitre();
$zeus = new Chien();
$higgins->setAnimal($zeus);



