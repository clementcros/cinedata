<script src="<?php echo base_url()?>/assets/js/show_more.js"></script>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Bonjour <?PHP echo $user[0]['prenom']; ?></h1>


        </div>
        <div class="col-sm-12">

            <ul class="list-group">
                <li class="list-group-item active color"> Votre status : <?php echo $user[0]['status']; ?></li>
                <li class="list-group-item">Vous êtes : <?php echo $gender; ?></li>
                <li class="list-group-item">Votre pseudo : <?php echo $user[0]['username']; ?></li>
                <li class="list-group-item">Votre pseudo : <?php echo $user[0]['email']; ?></li>
            </ul>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">

        <h2>Mes Scénarios</h2>
        <?php foreach ($article as $article_item): ?>
            <div class="col-md-6">
                <div class="col-xs-12"><h4>Auteur :<?php print_r($article_item['nom']); ?></h4></div>


                <div class="col-xs-12"><p><?php print_r($article_item['desciption']); ?></p></div>
                <div class="row">
                    <div class="col-xs-12"><a class="btn btn-primary"
                                              href="<?php echo base_url() . '/assets/uploads/files/' . $article_item['file_url']; ?>"
                                              role="button"
                                              download="scenario_<?php echo $article_item['nom']; ?>">Télécharger</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12" style="margin-top: 50px">
            <ul class="list-group">
                <li class="list-group-item active text-center color"> Mettre en ligne un nouveau scénario</li>
                <li class="list-group-item text-center"><a class="btn btn-primary"
                                                           href="<?php echo base_url('index.php/scenario'); ?>"
                                                           role="button"">Mettre en ligne</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-md-6">
<a class="btn btn-primary" href="<?php echo base_url('index.php/account/edit_profile'); ?>" role="button"">Modifier mon profile</a>
    </div>
    <div class="col-md-6">
<a class="btn btn-danger color" href="<?php echo base_url('index.php/account/setting'); ?>" role="button"">Paramètre</a>
    </div>
</div>
<style>
    .color{
        background-color: <?php echo $color[0]['color']; ?> !important;
        border-color : <?php echo $color[0]['color']; ?> !important;

    }
</style>
