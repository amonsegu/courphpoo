<?php

use Model\Abonne;

require_once 'autoload.php';

$abonne = new Abonne();

if (!empty($_POST)) {
    $abonne->setPrenom($_POST['prenom']);

    $errors = [];

    if ($abonne->validate($errors)) {
        $abonne->save();

        header('Location: abonnes.php');
        die;
    }
}

require 'layout/top.php';
?>
<h1>Edition abonné</h1>

<?php
if (!empty($errors)) :
?>
    <div class="alert alert-danger">
        <?= implode('<br>', $errors) ?>
    </div>
<?php
endif;
?>

<form method="post">
    <div class="form-group">
        <label>Prénom</label>
        <input type="text" name="prenom" class="form-control">
    </div>
    <div class="text-right">
        <button type="submit" class="btn btn-primary">
            Enregistrer
        </button>
    </div>
</form>

<?php
require 'layout/bottom.php';
?>