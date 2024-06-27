<?php
include("code/connect.php");
include("teknik.php");

?>

<?php
$ad=$_GET["adi"];
$soyad=$_GET["soyadi"];
$mevki=$_GET["yetki"];
$img=$_GET["img"];
$sql="INSERT INTO teknik VALUES(NULL,'$ad','$soyad','$mevki','$img')";

$sonuc=mysqli_query($con,$sql);

if ($sonuc)
    if ($sonuc)
        echo '<script>alert("İşlem Başarıyla tamamlandı.")</script>';
    else
        echo '<script>alert("İşlem Başarısız.")</script>';

?>