<?php
require_once 'Chat.php';
require_once 'Chien.php';
require_once 'Humain.php';


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

