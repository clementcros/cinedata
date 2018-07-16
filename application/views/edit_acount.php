
<form class="form-horizontal" action="<?php echo base_url('index.php/account/validate_profile')?>" method="post">
    <fieldset>

        <!-- Form Name -->
        <legend>Modifiez vos informations personnelles</legend>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="gender">Genre</label>
            <div class="col-md-4">
                <select id="gender" name="gender" class="form-control">
                    <option value="0">Homme</option>
                    <option value="1">Femme</option>
                </select>
            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="username">Nom d'utilisateur</label>
            <div class="col-md-4">
                <input id="username" name="username" type="text" placeholder="Pseudo" class="form-control input-md" required="">

            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="prenom">prenom</label>
            <div class="col-md-4">
                <input id="prenom" name="prenom" type="text" placeholder="prenom" class="form-control input-md" required="">

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
                <span class="help-block">Pour des raison de sécurité n'hésiter pas a compléxifier votre mot de passe</span>
            </div>
        </div>


        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password_reapeat">Confirmer votre mot de passe</label>
            <div class="col-md-4">
                <input id="password_reapeat" name="password_reapeat" type="password" placeholder="mot de passe" class="form-control input-md">

            </div>
        </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="email">Email</label>
                <div class="col-md-4">
                    <input id="email" name="email" type="text" placeholder="votre mail" class="form-control input-md" required="">

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
                <button id="Submit" name="Submit" class="btn btn-success">Validé</button>
            </div>
        </div>


    </fieldset>
</form>
