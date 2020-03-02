<?php

use Animal\Continent\Afrique\Elephant as ElephantAfrique;
use Animal\Continent\Asie\Elephant as ElephantAsie;
use Animal\Elephant as ElephantInterface;
require_once 'autoload.php';

function afficheTailleOreille(ElephantInterface $elephant){
    echo 'un éléphant avec de ' . $elephant->getTailleOreilles() . ' Oreilles';
}

//instanciation de Animal\Continent\Afrique\Elephant
$elephantAfrique = new ElephantAfrique();
//instanciation de Animal\continent\Asie\Elephant
$elephantAsie = new ElephantAsie();
echo'<br>';
afficheTailleOreille($elephantAfrique);
echo'<br>';
afficheTailleOreille($elephantAsie);