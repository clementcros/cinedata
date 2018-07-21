<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Cinédata</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url(); ?>">Accueil</a></li>
            <li><a href="#">Forum</a></li>
            <li><a href="<?php echo site_url('examples/scenario_management')?>">Gestion de scénarios</a></li>
            <li><a href="<?php echo site_url('examples/contact')?>">Messages contacts</a></li>
            <span style="background-color:red;color:white;font-weight:bold;border-radius:30px;box-shadow:1px 1px 1px gray;padding:2px 3px 2px 4px;top: -6px;right:-6px;font-size:1em;"><?php echo $notif[0]['COUNT(signup.user_activation)'];?></span>
            <li><a   href="<?php echo base_url('index.php/main/logout'); ?>">Déconnexion</a></li>
            <li><a href="<?php echo site_url('examples/offices_management')?>">Utilisateurs</a></li>
        </ul>
    </div>
</nav>

<div style='height:20px;'></div>
<div style="padding: 10px">
    <?php echo $output; ?>
</div>
<?php foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</body>
</html>
