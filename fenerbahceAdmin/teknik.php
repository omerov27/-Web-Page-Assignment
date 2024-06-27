<?php
include("code/yonet.php");
include("code/connect.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <title>Fenerbahçe F.K</title>
  <link href="stils.css" rel="stylesheet" type="text/css" />
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
    <div>
      <div id="kulup-fb">
        <h1> Teknik Kadro</h1>
       
        <a href="teknikekle.php"><button class="bn632-hover bn26" style="margin-left: 50px;"><i class="bi bi-person-plus " width="35px" height="35px"></i></button></a>

  
       <?php
         $sql = "select * from teknik";
         //echo $sql;
         $sonuc = mysqli_query($con, $sql);

         while ($satir = mysqli_fetch_array($sonuc)) {
          $id = $satir["id"];
          $ad = $satir["adi"];
          $soyad = $satir["soyadi"];
          $mevki = $satir["yetki"];
          $resim = $satir["img"];

          echo '
             <div class="card" style="width: 18rem; margin-bottom:5px;">
               <img src="imgs/' . $resim .'"- class="card-img-top" alt="...">
               <div class="card-body">
                <h4 class="card-title">' . $ad . ' ' . $soyad . '</h4>
                <p class="card-text">' . $mevki . '</p>
                <a href=tekniksil.php?id=' . $id . '><i class="bi bi-trash"></i><a/>
               </div>
             </div> <br>';
        }
      ?>
    </div>
    <div id="footer">2012, Tüm hakları saklıdır. </div>
  </div>
</body>

</html>