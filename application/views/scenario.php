<br>
<div class="container">

<div class="row">

 <?php  foreach ($article as $article_item): ?>
<div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <h3 class="card-img-top"><?php print_r( $article_item['nom']);?> </h3>
                    <p class="card-block">
                    <?php print_r( $article_item['desciption']);?>
                    </p>
                    <a class="btn btn-primary" href="<?php echo base_url().'assets/uploads/files/'.$article_item['file_url'];?>" role="button" download="scenario_<?php echo $article_item['nom'];?>">Télécharger</a>
                </div>
            </div>
            <?php endforeach; ?>

    </div>
</div>

<style>
    img{
        text-align: center;
        width:250px;
        height:250px;
    }
</style>
