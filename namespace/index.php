<?php
require_once 'Database/Cnx.php';
require_once 'Smtp/Cnx.php';


/*
 * Le nom complet de la classe Cnx
 * dans le namespace Database est Database\Cnx
 * = nom pleinement qualifié (fully qualified name)
 */
$cnx = new Database\Cnx();
$cnx->connect();

echo '<br>';

$stmpCnx = new Smtp\Cnx();
$stmpCnx->connect();