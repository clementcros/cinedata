<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Bonjour <?PHP echo $user[0]['prenom']; ?></h1>


        </div>
        <div class="col-sm-6">
        <p>email : <?php print_r( $user[0]['email']);?></p>

            <ul class="list-group">
                <li class="list-group-item active"> Votre status : <?php echo $user[0]['status']; ?></li>
                <li class="list-group-item">Vous êtes : <?php echo $gender ; ?></li>
                <li class="list-group-item">Votre pseudo : <?php echo $user[0]['username'];?></li>
            </ul>

        </div>
        <div class="col-sm-6">
        <h2>Mes Scénarios</h2>
        <?php  foreach ($article as $article_item): ?>
        
    <div class="row">
        <div class="col-xs-12"><h4>Auteur :<?php print_r( $article_item['nom']);?></h4></div>
    </div>
    
        <div class="col-xs-12"><p><?php print_r( $article_item['desciption']);?></p></div>
    <div class="row">
        <div class="col-xs-12"><a class="btn btn-primary" href="<?php echo base_url().'/assets/uploads/files/'.$article_item['file_url'];?>" role="button" download="scenario_<?php echo $article_item['nom'];?>">Télécharger</a></div>
    </div>
    <?php endforeach; ?>
</div>
      <div class="col-xs-12" style="margin-top: 50px">
          <ul class="list-group">
              <li class="list-group-item active text-center"> Mettre en ligne un nouveau scénario</li>
              <li class="list-group-item text-center"><a class="btn btn-primary" href="<?php echo base_url('index.php/scenario');?>" role="button"">Mettre en ligne</a></li>
          </ul>
      </div>

        <a class="btn btn-primary" href="<?php echo base_url('index.php/account/edit_profile');?>" role="button"">edit profile</a>

        </div>
    </div>
</div>
