</div>
<form class="form-horizontal" action="<?php echo base_url('index.php/Main/pass_changed')?>" method="post">
    <fieldset>

        <!-- Form Name -->
        <legend>Form Name</legend>

        <!-- Password input-->
        <div class="form-group">
            <input type="hidden" id="username" name="custId" value="<?php echo $username;   ?>">
            <label class="col-md-4 control-label" for="passwordinput">Mot de passe</label>
            <div class="col-md-4">
                <input id="passwordinput" name="passwordinput" type="password" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password_reapeat">Confirmer votre mot de passe</label>
            <div class="col-md-4">
                <input id="password_reapeat" name="password_reapeat" type="password" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <button id="Submit" name="Submit" class="btn btn-success">Valider</button>
            </div>
        </div>

    </fieldset>
</form>
