<link rel="stylesheet" href="<?php echo base_url()?>/css/login.css">

<br>
<br>
<div class="container contain-style">
    <div class="col-md-12">
        <div class="row">
            <h1>Connexion</h1>
            <?php

            echo form_open('Main/login_action');

            echo validation_errors();

            echo "<p>Pseudo ";
            echo form_input('username', $this->input->post('username'));
            echo "</p>";

            echo "<p>Mot de passe ";
            echo form_password('password');
            echo "</p>";

            echo "</p>";
            echo form_submit('login_submit', 'Valider');
            echo "</p>";

            echo form_close();

            ?>
            <a class="btn btn-primary" href="<?php echo base_url()."index.php/Main/signin"; ?>" role="button">Inscription</a>
            <br>
            <a class="btn btn-primary" href="<?php echo base_url()."index.php/Main/reset_password"; ?>" role="button">mot de passe oublié ?</a>
        </div>
    </div>

</div>

</body>
</html>
