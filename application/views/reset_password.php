</div>
<form class="form-horizontal" action="<?php echo base_url('index.php/Main/resetnow')?>" method="post">
    <fieldset>

        <!-- Form Name -->
        <legend>Retrouvez votre mot de passe</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>
            <div class="col-md-4">
                <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md">

            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <button id="Submit" name="Submit" class="btn btn-success">Valider</button>
            </div>
        </div>

    </fieldset>
</form>
