<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
<?php echo isset($error) ? $error : ''; ?>
<form method="post" action="<?php echo site_url('Login/process'); ?>">
    <table cellpadding="2" cellspacing="2">
        <tr>
            <td><th>Pseudo : </th></td>
            <td><input type="text" name="user"></td>
        </tr>
        <tr>
            <td><th>Mot de passe : </th></td>
            <td><input type="password" name="pass"></td>
        </tr>

        <tr>
            <td> </td>
            <td><input type="submit" value="Login"></td>
        </tr>
    </table>
</form>
</body>
</html>
