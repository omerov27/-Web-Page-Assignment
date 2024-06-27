<?php
include("connect.php");

?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="stils.css">
    <title>Fenerbahçe F.K</title>
</head>

<body>
  <style>
.card a{
  color: black;
  text-decoration: none;
  background-color: white;
}
.card button{

  border-radius: 5px;
}
  </style>
    <br><br>
  <form action="goruskaydet.php" method="get">
    <br><br><br>
    <?php
      echo '
       <div class="card" style="width: 58rem; margin:auto;" style="background-color:white;">
         <div class="card-body">
           <h5 class="card-title">Adınız<br> <br><input type="text" name="adi" id=""></h5><br>
            <h5 class="card-title">Soyadınız<br> <br><input type="text" name="soyadi" id=""></h5><br>
            <h5 class="card-title">E-posta Adresiniz<br> <br><input type="email" name="mail" id=""></h5><br>
            <h5 class="card-title"> Görüşleriniz <br><br> <textarea name="yorum" rows="10px" cols="50px"  id="" " ></textarea><br></h5><br>
            <input type="submit" value="Gönder" style="border-radius:5px;">
            <button"><a href="index.php">İptal et</a></button> 
          </div>          
        </div>
      ';
    ?>    
  </form>
</body>

</html>