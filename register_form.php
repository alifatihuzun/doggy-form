<?php
include 'connection.php';
if(isset($_POST["register_button"])) {
    $isim = $_POST["isim"];
    $soyisim = $_POST["soyisim"];
    $parola = $_POST["parola"];
    $eposta = $_POST["eposta"];

    $sqlekle = "INSERT INTO user(`name`,`surname`,`password`,`mail`) VALUES('$isim','$soyisim','$parola','$eposta')";
    $sonuc = mysqli_query($baglan,$sqlekle);
    if ($sonuc) {
        header("location: http://localhost/php2/private/index.php");
    }
}
?>