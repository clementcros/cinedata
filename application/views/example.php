<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>/css/bootstrap.css">
<?php
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Cinédata</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url(); ?>">Accueil</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('index.php/scenario'); ?>">Scénario</a></li>
                    <li><a href="#">ImDb</a></li>
                    <li><a href="#">Droits</a></li>
                    <li><a href="#">Financement</a></li>
                </ul>
            </li>
            <li><a href="#">Forum</a></li>
            <li><a href="<?php echo site_url('examples/offices_management')?>">Utilisateurs</a></li>
            <li><a   href="<?php echo base_url('index.php/main/logout'); ?>">Deconnexion</a></li>
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
