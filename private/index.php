<?php include 'connection.php';
    $sqlcall = "SELECT name FROM user";
    $data = mysqli_query($baglan,$sqlcall);
    $row = mysqli_fetch_assoc($data);
        
    $isim = $row['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <img src="dog-meme.gif" alt="">
        <form action="end_session.php">
            <fieldset>
                <legend>İsminiz : <?php echo $isim?> </legend>
            </fieldset>
            <button name="submit" class="submit">Çıkış</button>
        </form> 
    </div>
</body>
</html>