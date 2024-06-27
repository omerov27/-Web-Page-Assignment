<?php
include("code/connect.php");
include("teknik.php");

?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br><br>


    <?php

    $id = $_GET["id"];

    //$sql="DELETE FROM sinif1 WHERE id=$id";

    $sql = "DELETE FROM teknik WHERE id=$id";
    $sonuc = mysqli_query($con, $sql);
    if ($sonuc)
        if ($sonuc)
            echo '<script>alert("İşlem Başarıyla tamamlandı.")</script>';
        else
            echo '<script>alert("İşlem Başarısız.")</script>';

    ?>


</body>

</html>