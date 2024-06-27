<?php
include("code/yonet.php");
include("code/connect.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="stils.css">
  <title>Document</title>
</head>

<body>
  <div id="container">
    <div id="header">
      <div id="menu">
        <ul>
          <li><a href="index.php">Ansayfa</a></li>
          <li><a href="https://fenerium.com/" target="_blank">Fenerium</a></li>
          <li><a href="kulup.php">KULÜP</a></li>
          <li class="brans-li"><a href="yonetim.php">Yönetim </a> </li>
          <li><a href="oyuncu.php"> Oyuncularımız</a></li>
          <li><a href="teknik.php">Teknik Heyet</a></li>
          <li><a href="goruslistele.php">Görüşler</a></li>


        </ul>
      </div>
    </div>

    <?php

      $sql = "select * from futbolcular";
      //echo $sql;
     $sonuc = mysqli_query($con, $sql);

       while ($satir = mysqli_fetch_array($sonuc)) {
        $id = $satir["id"];
        $ad = $satir["adi"];
        $soyad = $satir["soyadi"];
        $yas = $satir["yas"];
        $mevki = $satir["mevki"];
        $resim = $satir["img"];

        echo '

           <div class="card" style="width: 18rem;">
            <img src="imgs/' . $resim . '" - class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">' . $ad . '-' . $soyad . '</h5>
              <p class="card-text">' . $yas . '</p>
              <p class="card-text">' . $mevki . '</p>
              <a href=sil.php?id=' . $id . '><i class="bi bi-trash"></i><a />
            </div>

          </div>
        ';
      }


    ?>
  </div>
</body>

</html>