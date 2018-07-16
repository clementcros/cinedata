<div class="container">
    <div class="col-md-12">
        <div class="row">
            <h1>Sign In</h1>

            <?php

            echo form_open('Main/signin_validation');

            echo validation_errors();

            echo "<p>Nom d'utilisateur:";
            echo form_input('email');
            echo "</p>";

            echo "<p>Mot de passe:";
            echo form_password('password');
            echo "</p>";

            echo "<p>Confirmation du mot de pase:";
            echo form_password('cpassword');
            echo "</p>";

            echo "<p>";
            echo form_submit('signin_submit', 'Sign In');
            echo "</p>";
            echo form_close();

            ?>

        </div>
    </div>
</div>
