<?php
include("code/connect.php");
include("oyuncu.php");

?>

<?php
 $ad = $_GET["adi"];
 $soyad = $_GET["soyadi"];
 $yas = $_GET["yas"];
 $mevki = $_GET["mevki"];
 $img = $_GET["img"];
 $sql = "INSERT INTO futbolcular VALUES(NULL,'$ad','$soyad','$yas','$mevki','$img')";

 $sonuc = mysqli_query($con, $sql);

 if ($sonuc)
    echo '<script>alert("İşlem Başarıyla tamamlandı.")</script>';
 else
    echo '<script>alert("İşlem Başarısız.")</script>';

?>


