
<form class="form-horizontal" action="<?php echo base_url('index.php/account/validate_profile')?>" method="post">
    <fieldset>

        <!-- Form Name -->
        <legend>Modifiez vos informations personnelles</legend>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="gender">Sexe</label>
            <div class="col-md-4">
                <select id="gender" name="gender" class="form-control">
                    <option value="0">Homme</option>
                    <option value="1">Femme</option>
                </select>
            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="username">Pseudo</label>
            <div class="col-md-4">
                <input id="username" name="username" type="text" placeholder="Pseudo" class="form-control input-md" required="">

            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="prenom">Prénom</label>
            <div class="col-md-4">
                <input id="prenom" name="prenom" type="text" placeholder="Prénom" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Nom</label>
            <div class="col-md-4">
                <input id="textinput" name="textinput" type="text" placeholder="Nom" class="form-control input-md" required="">

            </div>

        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="passwordinput">Mot de passe</label>
            <div class="col-md-4">
                <input id="passwordinput" name="passwordinput" type="password" placeholder="Mot de passe" class="form-control input-md">
                <span class="help-block">Pour des raisons de sécurité n'hésitez pas à complexifier votre mot de passe</span>
            </div>
        </div>


        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password_reapeat">Confirmez votre mot de passe</label>
            <div class="col-md-4">
                <input id="password_reapeat" name="password_reapeat" type="password" placeholder="Confirmation" class="form-control input-md">

            </div>
        </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="email">Email</label>
                <div class="col-md-4">
                    <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="status">Votre status</label>
                <div class="col-md-4">
                    <select id="status" name="status" class="form-control">
                        <option value="Étudiant">Étudiant</option>
                        <option value="Cinéaste">Cinéaste</option>
                        <option value="Acheteur">Acheteur</option>
                    </select>
                </div>
            </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Submit"></label>
            <div class="col-md-4">
                <button id="Submit" name="Submit" class="btn btn-success">Valider</button>
            </div>
        </div>


    </fieldset>
</form>
