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
            <h1>Codeigniter-Tp4-BD-MVC</h1>
        </div>
        <div id="maincol">
            <h2>Utilisation des bases de donnees & du modele de conception MVC</h2>
            L'objectif de ce Tp est d'apprendre a utiliser :
            <?php
            echo ul(array('Select', 'Cbo dynamiques', 'Liens dynamiques'));
            ?>
        </div>
        <div id="leftcol">
            <h2>Menu</h2>
            <?php
            echo anchor('controleurTp4', 'Accueil', 'Retour à l\'accueil');
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