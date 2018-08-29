<script src="<?php echo base_url()?>/assets/js/show_more.js"></script>
<script src="<?php echo base_url()?>/css/account.css"></script>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Bonjour <?PHP echo $user[0]['prenom']; ?></h1>
        </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item">Status : <?php echo $user[0]['status']; ?></li>
                    <li class="list-group-item">Sexe : <?php echo $gender; ?></li>
                    <li class="list-group-item">Pseudo : <?php echo $user[0]['username']; ?></li>
                    <li class="list-group-item">Email : <?php echo $user[0]['email']; ?></li>
                </ul>
            </div>

            <div class="col-md-6">
                <div class="row" style="margin-top: 50px">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <a class="btn btn-primary btn-block" href="<?php echo base_url('index.php/account/edit_profile'); ?>" role="button"">Modifier mon profil</a>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                    <a class="btn btn-danger btn-block color" href="<?php echo base_url('index.php/account/setting'); ?>" role="button"">Paramètres</a>
                    </div>
                    <div class="col-md-3"></div>
                </div> 
                <div class="row"></div>               
            </div>
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <ul class="list-group">
            <li class="list-group-item active color"><h3 class="element">Mes Scénarios</h3></li>
<!--        <h2>Mes Scénarios :</h2>-->

        </ul>
        <?php
        if($article != null){


        foreach ($article as $article_item):
            ?>
            <div class="col-md-<?php echo $col;?>">
                <!-- <div class="col-xs-12"><h4>Auteur :<?php print_r($article_item['nom']); ?></h4></div> -->
                <img src="<?php echo base_url() . '/assets/uploads/files/' . $article_item['image']; ?>" class="img-responsive" alt="Cinque Terre">

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
      <?php  }
      else {
            echo "<br>";
            echo "<h4>Vous n'avez pas encore de Scénarios n'hésiter pas a mettre en ligne votre premier scénario :)</h4>";
          echo "<br>";
      }
      ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">

        <div class="col-md-12">
            <ul class="list-group">
                <li class="list-group-item active color"><h3 class="element">Mes Métrages</h3></li>
                <!--        <h2>Mes Scénarios :</h2>-->

            </ul>
        <?php
        if($article != null){


        foreach ($metrage as $article_item):
            ?>
            <div class="col-md-<?php echo $col;?>">
                <div class="col-xs-12"><h4>Auteur :<?php print_r($article_item['nom']); ?></h4></div>
                <img src="<?php echo base_url() . '/assets/uploads/files/' . $article_item['image']; ?>" class="img-responsive" alt="Cinque Terre">

                <div class="col-xs-12"><p><?php print_r($article_item['desciption']); ?></p></div>
                <div class="row">
                    <div class="col-xs-12"><a class="btn btn-primary"
                                              href="<?php echo base_url() . '/assets/uploads/files/' . $article_item['file_url']; ?>"
                                              role="button"
                                              download="scenario_<?php echo $article_item['nom']; ?>">Voir</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php  }
        else {
            echo "<br>";
            echo "<h4>Vous n'avez pas encore de Métrages, n'hésiter pas a mettre en ligne votre premier métrage :)</h4>";
            echo "<br>";
        }
        ?>
        </div>
    </div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12" style="margin-top: 50px">
            <ul class="list-group">
                <li class="list-group-item active text-center color"> Mettre en ligne un nouveau scénario</li>
                <li class="list-group-item text-center"><a class="btn btn-primary"
                                                           href="<?php echo base_url('index.php/scenario/example_with_or_where'); ?>"
                                                           role="button"">Ajouter/Modifier</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12" style="margin-top: 50px">
            <ul class="list-group">
                <li class="list-group-item active text-center color"> Mettre en ligne un nouveau métrage</li>
                <li class="list-group-item text-center"><a class="btn btn-primary"
                                                           href="<?php echo base_url('index.php/scenario/metrage'); ?>"
                                                           role="button"">Ajouter/Modifier</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12" style="margin-top: 50px">
            <ul class="list-group">
                <li class="list-group-item active text-center color"> S'inscrire à un évènement</li>
                <li class="list-group-item text-center"><a class="btn btn-primary"
                                                           href="<?php echo base_url('index.php/event'); ?>"
                                                           role="button"">Inscription</a></li>
            </ul>
        </div>
    </div>
</div>

<style>
    .color{
        background-color: <?php echo $color[0]['color']; ?> !important;
        border-color : <?php echo $color[0]['color']; ?> !important;
    }
    .element{
        color: white;
        text-align: center;
    }
</style>
