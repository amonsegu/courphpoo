<?php

use Model\Abonne;

require_once 'include/init.php';


$abonnes = Abonne::findAll();

require 'layout/top.php';
?>
    <h1>Gestion abonnés</h1>

    <a href="abonne-edit.php" class="btn btn-outline-primary mb-3">
        Ajouter un abonné
    </a>

    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Prénom</th>
            <th width="250px"></th>
        </tr>
        <?php
        foreach ($abonnes as $abonne) :
        ?>
            <tr>
                <td><?= $abonne->getId() ?></td>
                <td><?= $abonne->getPrenom() ?></td>
                <td>
                    <a href="abonne-edit.php?id=<?= $abonne->getId() ?>"
                       class="btn btn-primary">
                        Modifier
                    </a>
                    <a href="abonne-delete.php?id=<?= $abonne->getId() ?>"
                       class ="btn btn-danger">
                        Supprimer
                    </a>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>
<?php
require 'layout/bottom.php';
?>
