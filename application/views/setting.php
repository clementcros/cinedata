<form class="form-horizontal" action="<?php echo base_url('index.php/account/check_param')?>" method="post">
    <fieldset>

        <!-- Form Name -->
        <legend>Paramètre</legend>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">couleur générale du compte</label>
            <div class="col-md-4">
                <select id="selectbasic" name="color" class="form-control">
                    <option value="blue">bleu</option>
                    <option value="red">rouge</option>
                    <option value="green">vert</option>
                    <option value="darkkhaki">kaki</option>
                    <option value="grey">gris</option>
                    <option value="">default</option>
                </select>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <button id="Submit" name="Submit" class="btn btn-success">Validé</button>
            </div>
        </div>

    </fieldset>
</form>
