<?php
include("code/yonet.php");
include("code/connect.php");
?>
<!doctype html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fenerbahçe F.K</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="stils.css">
</head>

<body>
  <div id="container">
    <div id="header">
      <div></div>
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
  
    <div style="margin-bottom:5px; ">
      <img src="imgs/banneruygulamafbsk.jpg" class="resim1" , width="auto" height="560" alt="">
    </div>

    <div id="content">
      <div style="padding-left: 5px; margin-left: 5px;" id="content-left">
        <h1>ŞAMPİYON FENERBAHÇE BEKO</h1>
        <img src="imgs/ozelden-fenerbahce-bekoya-kutlama-mesaji.jpg" style="margin-top: 20px;" width="530px" alt="">
        <p>Fenerbahçe Beko Erkek Basketbol Takımımız, Türkiye Kupası şampiyonluğunun ardından ligi de şampiyonlukla tamamladı. </p>

         <p>Fenerbahçe Beko, Türkiye Sigorta Basketbol Süper Ligi play-off final serisi dördüncü maçında Anadolu Efes’i konuk etti. Normal süresi 64-64 eşitlikle tamamlanan maçta rakibini uzatma periyodu sonunda 80-72 mağlup eden Fenerbahçe Beko, seriyi 3-1’e getirdi ve şampiyonluğunu ilan etti.</p>
      </div>
      <div id="content-left">
        <h1>Jose Mourinho İstanbul’da</h1>
        <img src="imgs/mourinhokpk.jpg" style="margin-top: 20px;" width="530px" alt="">

        <p>Kulübümüzün, Futbol A Takımımızın teknik direktörlüğü için görüşmelere başladığını duyurduğu dünyaca ünlü Portekizli teknik adam Jose Mourinho İstanbul’a geldi.</p>
        <p>İngiltere’den kalkan özel uçakla İstanbul’a gelen Jose Mourinho’ya yolculuk esnasında Başkanımız Ali Y. Koç, Sayın Acun Ilıcalı ve Sportif Direktörümüz Mario Branco da eşlik etti.</p>

        <?php
        print("\n\n<!-- yonet dosyasından alınan dosya $dosya dır. --> \n\n");
        include($dosya);

        print("\n\n<!-- yonet dosyasından alınan dosya $dosya dır. -->\n\n");

        ?>

      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>




</html>
<?php
mysqli_close($con);
?>