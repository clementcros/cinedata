<link rel="stylesheet" href="<?php echo base_url()?>/css/login.css">

<br>
<br>
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">Connexion</h1>
            </div>
        </div>
    </div>
</div>
<div class="container contain-style">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="username">Pseudo</label>
                    <?php echo form_input('username', $this->input->post('username'));?>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">Mot de passe</label>*
                    <?php echo form_password('password');?>
                </div>
            </div>

            <?php
            echo form_open('Main/login_action');
            echo validation_errors();
            ?>
        </div>
    </div>

    <?php
    echo "<p></p>";
    echo "<p></p>";
    ?>
    <div class="row">
        <div class="col-md-6">
                <a class="btn btn-primary" href="<?php echo base_url()."index.php/Main/signin"; ?>" role="button">Inscription</a>
                <a class="btn btn-primary" href="<?php echo base_url()."index.php/Main/reset_password"; ?>" role="button">mot de passe oublié ?</a>
        </div>

       <div class="col-md-6">
            <?php
            echo form_submit('login_submit', 'Valider');
            echo form_close();
            ?>
       </div>
    </div>
</div>


<style>
    div.row h1 {
        color: limegreen;
        font-size: 63px;
    }

    input.form-control {
        border-width:5px;
        border-radius: 35px;
    }

    .form-group label {
        color: limegreen;
    }

    .form-control:active, .form-control:focus {
        border-style:outset;
        border-color: limegreen;
    }
    .btn-primary {
        background: limegreen;
        border-color: limegreen;
    }

    div.row .h1 {
        color: limegreen;
    }

    input[type=submit] {
        background: limegreen;
        border-color: limegreen;
    }

</style>

</body>
</html>
