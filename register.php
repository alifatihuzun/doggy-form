<?php include 'connection.php' ?>
<?php include 'register_form.php' ?>
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
    <form action="register_form.php" method="POST">
        <fieldset>
            <legend>İsim</legend>
            <input type="text" name="isim" required>
            <legend>Soyisim</legend>
            <input type="text" name="soyisim" required>
            <legend>E-mail</legend>
            <input type="mail" name="eposta" required>
            <legend>Şifre</legend>
            <input type="password" name="parola" required>
        </fieldset>
        <button class="submit" name="register_button">Kayıt ol</button>
    </form>
    </div>
</body>
</html>