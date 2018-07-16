<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Bonjour <?PHP echo $url; ?></h1>


        </div>
        <div class="col-sm-6">
        <p>email :</p>

        </div>
        <div class="col-sm-6">
        <h2>Mes Scénarios</h2>
        <?php  foreach ($article as $article_item): ?>
        
    <div class="row">
        <div class="col-xs-12"><h4><?php print_r( $article_item['nom']);?></h4></div>
    </div>
    
        <div class="col-xs-12"><p><?php print_r( $article_item['desciption']);?></p></div>
    <div class="row">
        <div class="col-xs-12"><a class="btn btn-primary" href="<?php echo base_url().'/assets/uploads/files/'.$article_item['file_url'];?>" role="button" download="scenario_<?php echo $article_item['nom'];?>">Link</a></div>
    </div>
    <?php endforeach; ?>
</div>
            
      


        </div>
    </div>
</div>
