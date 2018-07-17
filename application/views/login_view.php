<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login Page</title>
</head>
<body>
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <h1>Connexion</h1>
            <?php

            echo form_open('Main/login_action');

            echo validation_errors();

            echo "<p>Nom d'utilisateur: ";
            echo form_input('username', $this->input->post('username'));
            echo "</p>";

            echo "<p>Mot de passe: ";
            echo form_password('password');
            echo "</p>";

            echo "</p>";
            echo form_submit('login_submit', 'Login');
            echo "</p>";

            echo form_close();

            ?>
            <a class="btn btn-primary" href="<?php echo base_url()."index.php/Main/signin"; ?>" role="button">Inscription</a>
        </div>
    </div>

</div>

</body>
</html>
