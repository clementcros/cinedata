<form class="form-horizontal" action="<?php echo base_url('index.php/account/check_param')?>" method="post">
    <fieldset>

        <!-- Form Name -->
        <legend>Paramètres</legend>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">Couleur générale du compte</label>
            <div class="col-md-4">
                <select id="selectbasic" name="color" class="form-control">
                    <option value="blue">Bleu</option>
                    <option value="red">Rouge</option>
                    <option value="green">Vert</option>
                    <option value="darkkhaki">Kaki</option>
                    <option value="grey">Gris</option>
                    <option value="">Défaut</option>
                </select>
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
