<?php
/**
 * cette fonction est appelée automatiquement
 * au moment de l'utilisation d'une classe contenue
 * dans un fichier qui n'a pas été inclus
 */
spl_autoload_register(function ($classname) {
//    echo $classname;
//    echo __DIR__ . DIRECTORY_SEPARATOR . $classname . '.php';

    // pour la portabilité sous tous les OS, on utilise
    // la constante DIRECTORY_SEPARATOR qui vaut \ sous windows
    // et / sous les autres OS
    require_once __DIR__ . DIRECTORY_SEPARATOR
        . str_replace('\\', DIRECTORY_SEPARATOR, $classname)
        . '.php'
    ;
});
