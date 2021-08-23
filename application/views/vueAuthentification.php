<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel='stylesheet' href="<?php echo base_url(); ?>/css/style.css" />
        <title>Authentification</title>
    </head>
    <body>
        <section> 
	<div id="pagewidth" >
            <div id="header"><h1>CodeIgniter-Tp4-BD-MVC</h1></div>
            <div id="maincol"><h1>Authentification</h1>
	<?php
                echo form_open('authentification/saisir');
				echo form_label('Login : ');
                echo form_input('txtLogin',set_value('txtLogin'));
				echo form_error('txtLogin','<span class=error>', '</span>');
				echo br(2);
                echo form_label('Mot de passe : ');
                echo form_password('txtMdp',set_value('txtMdp'));
				echo form_error('txtMdp','<span class=error>', '</span>');
                echo br(2);
                echo form_submit('cmdValider','Valider');
                echo form_close();
    ?>
	</div>
	<div id="leftcol"> 
	</div>
	
</section>
    </body>
</html>
