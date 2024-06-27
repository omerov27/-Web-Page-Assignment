<?php
include("code/connect.php");
include("yonetim.php");

?>

<?php
$ad = $_GET["adisoyadi"];
$mevki = $_GET["yetki"];
$img = $_GET["img"];
$sql = "INSERT INTO yonetim2 VALUES(NULL,'$ad','$mevki','$img')";

$sonuc = mysqli_query($con, $sql);

if ($sonuc)
    if ($sonuc)
        echo '<script>alert("İşlem Başarıyla tamamlandı.")</script>';
    else
        echo '<script>alert("İşlem Başarısız.")</script>';

?>
