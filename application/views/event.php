
<div class="container">
    <div class="row">
        <h1>Bienvenue sur la liste des évènement</h1>
    </div>
    <?php  foreach ($metrages as $data): ?>
    <div class="row">
        <div class="col-md-5 col-lg-5">
            <!-- artigo em destaque -->
            <h3><?php echo $data['name']; ?></h3>
            <div class="featured-article">
                <a href="#">
                    <?php echo "<img src='". base_url().$data['image_1']." alt='' class='thumb'>";?>
                </a>
                <div class="block-title">
                    <h2>Lorem ipsum dolor asit amet</h2>
                    <p class="by-author"><small>By Jhon Doe</small></p>
                </div>
            </div>
            <!-- /.featured-article -->
        </div>
        <div class="col-md-7 col-lg-7">
            <ul class="media-list main-list">
                <li class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/150x90" alt="...">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                        <p class="by-author">By Jhon Doe</p>
                    </div>
                </li>
                <li class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/150x90" alt="...">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                        <p class="by-author">By Jhon Doe</p>
                    </div>
                </li>
                <li class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/150x90" alt="...">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                        <p class="by-author">By Jhon Doe</p>
                    </div>
                </li>
            </ul>
        </div>
        <?php endforeach; ?>
    </div>
