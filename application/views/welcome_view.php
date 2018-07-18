<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
Bienvenue <?php echo $this->session->userdata('user'); ?>
<br>
<?php echo anchor('Login/logout', 'Logout'); ?>


</body>
</html>
