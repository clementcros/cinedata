<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>Bienvenue, vous êtes maintenant connecté !</h1>

<?php
echo "<pre>";
echo print_r($this->session->all_userdata());
echo "</pre>";
?>

<a href='<?php echo base_url()."index.php/Main/logout"; ?>'>Déconnexion</a>

</body>
</html>
