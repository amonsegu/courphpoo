<?php

use App\Cnx;

require_once 'autoload.php';

// PDO est instancié puis retourné
$pdo = Cnx::getInstance();

// PDO est déjà instancié, il est juste retourné
$cnx = Cnx::getInstance();



require 'layout/top.php';
?>
<h1>Accueil</h1>
<?php
require 'layout/bottom.php';
?>
