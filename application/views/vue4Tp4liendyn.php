<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <link rel='stylesheet' href="<?php echo base_url(); ?>/css/style.css" />
    <title>Ma vue</title>
</head>

<body>
    <div id="pagewidth">
        <div id="header">
            <h1>CodeIgniter-Tp4-BD-MVC</h1>
        </div>
        <div id="maincol">
            <h2>Affichage du resultat d'une requete : Lien dynamique</h2>
            <?php

            $data = array();
            for ($i = 0; $i < count($lesProduits); $i++) {
                $data[] = anchor('controleurTp4/modification/' . $lesProduits[$i]['codepdt'], $lesProduits[$i]['libpdt']);
            }
            echo ul($data);
            ?>

        </div>
        <div id="leftcol">
            <h2>Menu</h2>
            <?php
            echo anchor('controleurTp4/index', 'Accueil', 'Retour à l\'accueil');
            echo br();
            echo anchor('controleurTp4/listeTableProduit', 'Select', 'Lister une table');
            echo br();
            echo anchor('controleurTp4/choixListeDynCategorie', 'ListeDyn', 'Lister une table');
            echo br();
            echo anchor('controleurTp4/liendyn', 'Lien Dyn', 'Lister une table');
            echo br();
            ?>
        </div>
    </div>
</body>

</html>