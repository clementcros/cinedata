<form class="form-horizontal"  action="<?php echo base_url('index.php/Scenario/upload')?>" method="post">
    <fieldset>

        <!-- Form Name -->
        <legend>Upload de scénario</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Titre</label>
            <div class="col-md-4">
                <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                <span class="help-block">Ceci permettra de retrouver votre scénario à l'aide de notre moteur de recherche</span>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">Catégorie</label>
            <div class="col-md-4">
                <select id="selectbasic" name="selectbasic" class="form-control">
                    <option value="1">Romance</option>
                    <option value="2">Action</option>
                    <option value="">SF</option>
                    <option value="">Horreur</option>
                </select>
            </div>
        </div>

        <!-- File Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="filebutton">Fichier</label>
            <div class="col-md-4">
                <input id="filebutton" name="filebutton" class="input-file" type="file">
            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textarea">Description</label>
            <div class="col-md-4">
                <textarea class="form-control" id="textarea" name="textarea">Décrivez votre scénario</textarea>
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

<div class="container">
    <div class="col-md-12">
        <div class="row">
            <h4>Informations</h4>

            <p>Afin de permettre à la plateforme de pérenniser mais également de limiter l'envoi de faux scénarios, nous vous saurions gré de vous acquitter de la somme symbolique de
                <strong>1€</strong>
            </p>
            <p>Système de paiement sécurisé via PayPal. Nous vous remercions de l'attention portée à la plateforme.
            </p>
            <br>
            <p>L'équipe Cinédata</p>
        </div>
    </div>
</div>
