<?php 
include 'connection.php';

$sqlcall = "SELECT mail,password FROM user";
$data = mysqli_query($baglan,$sqlcall);
$row = mysqli_fetch_assoc($data);

session_start();

$mail = $row['mail'];
$parola = $row['password'];

if(isset($_SESSION["loginin"]) && $_SESSION["loginin"] == true) {
    header("location: http://localhost/php2/private/index.php");
}
if(isset($_POST['mail']) && isset($_POST['parola'])){ // Burada input alanına giren verileri değişkendeki verilerle karşılaştırıyorum doğruysa anasayfaya değilse bulunduğu sayfaya hata çıkıyor
    if($_POST['mail'] == $mail && $_POST['parola'] == $parola){
      $_SESSION['loginin'] = true;
      header("Location: http://localhost/php2/private/index.php");
    }else{
      header("location: http://localhost/php2/login.php?");
    }
  }
?>