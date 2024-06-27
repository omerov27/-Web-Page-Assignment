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
          <li><a href="fenerbahceAdmin\index.php" target="_blank">Admin Sayfası</a></li>


        </ul>
      </div>
    </div>
    <div id="kulup-fb">
      <div >
         <h1 style="padding-left: 15px; padding-top:15px;">Teknik Heyet</h1>
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
             <br>
             <div class="card" style="width: 18rem; margin-bottom:5px;">
               <img src="imgs/'.$resim.'"- class="card-img-top" alt="...">
               <div class="card-body">
                 <h5 class="card-title">'.$ad.' '.$soyad.'</h5>
                 <h5 class="card-text">'.$mevki .'</h5>
                 <br> 
               </div>
              </div> 
           <br>';
          }
        ?>
      </div>
    </div>
  </div>
    <div id="footer">2012, Tüm hakları saklıdır. </div>
</body>

</html>