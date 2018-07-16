<form class="form-horizontal"  action="<?php echo base_url('index.php/Scenario/upload')?>" method="post">
    <fieldset>

        <!-- Form Name -->
        <legend>Upload de scénario</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Titre</label>
            <div class="col-md-4">
                <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                <span class="help-block">Ceci permettra de vous retrouver au travers de notre moteurs de recherche</span>
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
            <label class="col-md-4 control-label" for="filebutton">File Button</label>
            <div class="col-md-4">
                <input id="filebutton" name="filebutton" class="input-file" type="file">
            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textarea">Descitpion</label>
            <div class="col-md-4">
                <textarea class="form-control" id="textarea" name="textarea">Décrivez votre scénario </textarea>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
            <div class="col-md-4">
                <button id="Submit" name="Submit" class="btn btn-success">Validé</button>
            </div>
        </div>

    </fieldset>
</form>

<div class="container">
    <div class="col-md-12">
        <div class="row">
            <h4>Information</h4>

            <p>Afin de permettre a la plateforme de vivre et également de limiter l'envois de Scénario peu sérieux il vous seras demander de vous acquiter de la somme symbolique de
                <strong>1€</strong>
                notre systeme de payment est sécuriser via paypal. Nous vous remercions de l'attention que vous porter a la plateforme
            </p>
            <br>
            <p>l'équipe Cinédata</p>
        </div>
    </div>
</div>
