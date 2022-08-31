<?php include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginform</title>
    <link rel="stylesheet" href="assests/style2.css">
</head>
<body>
    <div class="container">
    <form action="" method="POST">
        <fieldset >
            <legend>E-mail</legend>
            <input type="mail" name="mail">
            <legend>Şifre</legend>
            <input type="password" name="parola">
        </fieldset>
        <button class="submit">Giriş yap</button>
    </form>
    </div>
</body>
</html>
<?php include 'login_form.php' ?>