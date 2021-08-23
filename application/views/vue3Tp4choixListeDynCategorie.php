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
            <h2>Formulaire avec une combobox dynamique</h2>
            <?php
            echo form_open('controleurTp4/listeform');
            echo form_label('Categorie : ');
            $options = array();
            for ($i = 0; $i <= count($lesCategories) - 1; $i++) {
                $cle = $lesCategories[$i]['codecat'];
                $options[$cle] = $lesCategories[$i]['libcat'];
            }
            echo form_dropdown('lstcat', $options);
            echo br(2);
            echo form_submit('cmdvalider', 'Valider');
            echo form_reset('cmdAnnuler', 'Annuler');
            echo form_close();
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