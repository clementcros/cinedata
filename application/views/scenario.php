<br>
<div class="container">

<div class="row">

 <?php  foreach ($article as $article_item): ?>
<!--<div class="col-sm-6 col-md-4 col-lg-3 mt-4">-->
<!--                <div class="card">-->
<!--                    <h3 class="card-img-top">--><?php //print_r( $article_item['nom']);?><!-- </h3>-->
<!--                    <img src="--><?php //echo base_url() . '/assets/uploads/files/' . $article_item['image']; ?><!--" class="img-responsive" alt="Cinque Terre">-->
<!--                    <p class="card-block">-->
<!--                    --><?php //print_r( $article_item['desciption']);?>
<!--                    </p>-->
<!--                    <a class="btn btn-primary" href="--><?php //echo base_url().'assets/uploads/files/'.$article_item['file_url'];?><!--" role="button" download="scenario_--><?php //echo $article_item['nom'];?><!--">Link</a>-->
<!--                </div>-->
<!--            </div>-->
<!--     <div class="card">-->
<!--         <img src="--><?php //echo base_url() . '/assets/uploads/files/' . $article_item['image']; ?><!--" alt="Avatar" style="width:100%">-->
<!--         <div class="container">-->
<!--             <h4><b>--><?php //print_r( $article_item['nom']);?><!--</b></h4>-->
<!--             <p>--><?php //print_r( $article_item['desciption']);?><!--</p>-->
<!--             <a class="btn btn-primary" href="--><?php //echo base_url().'assets/uploads/files/'.$article_item['file_url'];?><!--" role="button" download="scenario_--><?php //echo $article_item['nom'];?><!--">download</a>-->
<!--         </div>-->
<!--     </div>-->
     <div class="card col-lg-6">

         <!-- Card image -->
         <img class="card-img-top" src="<?php echo base_url() . '/assets/uploads/files/' . $article_item['image']; ?>" alt="Card image cap">

         <!-- Card content -->
         <div class="card-body">

             <!-- Title -->
             <h4 class="card-title"><a><?php print_r( $article_item['nom']);?></a></h4>
             <!-- Text -->
             <p class="card-text"></p>                    <?php print_r( $article_item['desciption']);?>

             <!-- Button -->
             <a href="<?php echo base_url().'assets/uploads/files/'.$article_item['file_url'];?>" class="btn btn-primary">telecharger</a>

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
