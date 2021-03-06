<div class="container">

 <?php  foreach ($article as $article_item): ?>
    <div class="row">

         <div class="card col-md-6">
             <div class="col-lg-6">
                 <img class="card-img-top" src="
                 <?php
                     if ($article_item['image'] != null){
                         echo base_url() . '/assets/uploads/files/' . $article_item['image'];
                     }
                     else {
                         echo base_url() . '/images/clap-1.png';
                     }
                 ?>" alt="Card image cap">
             </div>
             <div class="card" style="width: 50rem;">
                 <div class="card-body text-center">
                     <h2 class="card-title"><a><?php print_r( $article_item['nom']);?></a></h2>
                     <p class="card-text"><?php print_r( $article_item['desciption']);?></p>
                     <?php
                     if ($user[0]['status'] == 'Acheteur' || isset($user[0]['username']) == 'admin' )
                     {

                       echo  "<a href=".base_url().'assets/uploads/files/'.$article_item['file_url']." class='btn btn-primary'>Télécharger </a>";
                     }
                     else{
                         echo "<h4>Pour télécharger le scénario vous devez être un Acheteur</h4>";
                     } ?>
                 </div>
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
    .card.col-md-6 {
        word-wrap: break-word;
        margin-top: 5rem;
        margin-bottom: 5rem;
    }
</style>