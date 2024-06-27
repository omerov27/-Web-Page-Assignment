<?php
include("yonet.php");
include("connect.php");
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
          <li><a href="goruslistele.php">Görüşler</a></li>
        </ul>
      </div>
    </div>
    <div id="kulup-fb">
      <h1 style="padding-left: 50px; padding-top:40px;">Yönetim Kurulu</h1>
      <?php

       $sql = "select * from yonetim";
       //echo $sql;
       $sonuc = mysqli_query($con, $sql);
        while ($satir = mysqli_fetch_array($sonuc)) {
        $id = $satir["id"];
        $adsoyad = $satir["adisoyadi"];
        $mevki = $satir["yetki"];
        $resim = $satir["img"];
        echo '
          <div class="card" style="width: 18rem; ">
           <img src="imgs/'.$resim .'"- class="card-img-top" alt="...">
           <div class="card-body">
              <h4 class="card-title">'.$adsoyad.'</h4>
              <p class="card-text"style="color:white;">'.$mevki.'</p>
            </div>
          </div> 
        ';
       }

      ?>

      <br>
      <hr>
      <h1 style="padding-left: 50px; padding-top:40px;">Yönetim Kurulu Üyeleri</h1>
      <?php

       $sql = "select * from yonetim2";
       //echo $sql;
       $sonuc = mysqli_query($con, $sql);

       while ($satir = mysqli_fetch_array($sonuc)) {
        $id = $satir["id"];
        $adsoyad = $satir["adisooyadi"];
        $mevki = $satir["yetki"];
        $resim = $satir["img"];
        echo '
        <div class="card" style="width: 18rem;  margin-bottom:25px;">
         <img src="imgs/' . $resim . '"- class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title" style="color:white">' . $adsoyad . '</h5>
           <p class="card-text" style="color:white;">'.$mevki.'</p>
          </div>
        </div> <br><br>';
       }

      ?>
    </div>
  </div>
  <div id="footer">2012, Tüm hakları saklıdır. </div>
  <footer class="site-footer">
      <div class=" container">
    <div class="row">

      <div class="col-xs-6 col-md-3">
        <h1>Haberler</h1>
        <ul class="footer-links">
          <li><a href="https://www.fenerbahce.org/Haberler?hb=club">Kulüp</a></li>
          <li><a href="https://www.fenerbahce.org/Haberler?hb=football">Futbol</a></li>
          <li><a href="https://www.fenerbahce.org/Haberler?hb=basketball-man">Basketbol Erkek</a></li>
          <li><a href="https://www.fenerbahce.org/Haberler?hb=basketball-woman">Basketbol Kadın</a></li>
          <li><a href="https://www.fenerbahce.org/Haberler?hb=volleyball-man">Voleybol Erkek</a></li>
          <li><a href="https://www.fenerbahce.org/Haberler?hb=volleyball-woman">Voleybol Kadın</a></li>
        </ul>
      </div>

      <div class="col-xs-6 col-md-3">
        <h1>Kulüp</h1>
        <ul class="footer-links">
          <li><a href="https://www.fenerbahce.org/Kulup/Fenerbahce-SK">Fenerbahçe SK</a></li>
          <li><a href="https://www.fenerbahce.org/Kulup/Tarihce">Tarihçe</a></li>
          <li><a href="https://www.fenerbahce.org/muze">Müze</a></li>
          <li><a href="https://www.fenerbahce.org/Kulup/Yonetim-Kurulu">Yönetim Kurulu</a></li>
          <li><a href="https://www.fenerbahce.org/Kulup/Ataturk-Fenerbahce">Atatürk ve Fenerbahçe</a></li>
        </ul>
      </div>
      <div class="col-xs-6 col-md-3">
        <h1>Görüşlerin bizim için çok önemli</h1>
        <br>
        <h5>Görüşlerini paylaşmak için <a href="gorus.php" target="_blank">Tıkla</a></h5>
      </div>
    </div>

    <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; Fenerbahçe SK
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="https://github.com/omerov27" target="_blank"><i class="bi bi-github"></i></a></li>
            <li><a class="twitter" href="https://x.com/omerruren" target="_blank"><i class="bi bi-twitter"></i></a></li>
            <li><a class="dribbble" href="https://www.instagram.com/omeruren27/" target="_blank"><i class="bi bi-instagram"></i></i></a></li>
            <li><a class="linkedin" href="https://www.linkedin.com/in/%C3%B6mer-%C3%BCren-2b9542315/" target="_blank"><i class="bi bi-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>