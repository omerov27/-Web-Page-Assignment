<?php
include("connect.php");
include("gorus.php");

?>

<?php
 $ad = $_GET["adi"];
 $soyad = $_GET["soyadi"];
 $mail = $_GET["mail"];
 $yorum = $_GET["yorum"];

 $sql = "INSERT INTO gorusler VALUES(NULL,'$ad','$soyad','$mail','$yorum')";

 $sonuc = mysqli_query($con, $sql);

 if ($sonuc)
 {   
        echo '<script>alert("İşlem Başarıyla tamamlandı.")</script>';
        
}
    else
        echo '<script>alert("İşlem Başarısız.")</script>';

?>
