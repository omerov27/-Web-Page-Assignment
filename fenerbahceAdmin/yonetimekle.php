<?php
include("code/connect.php");

?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Fenerbahçe F.K</title>
</head>

<body>
    <br><br>

    <a href="listele.php">Listele</a><br>


    <form action="yonetimkaydet.php" method="get">


        <br>

        <br>
        <br>



        <?php
          echo '
            <div class="card" style="width: 18rem; margin:auto;">
                <h5> image:</h5> <input type="text" name="img" value="default.jpg">
                 <div class="card-body">
                  <h5 class="card-title">Adı ve Soyadı:  <input type="text" name="adisoyadi" id=""></h5>
                 <h5 class="card-title">yetki: <input type="text" name="yetki" ></h5>
                  <br>
                 <div style="text-align: center;">
                      <input type="submit" value="Kaydet">
                 </div>     
         
                </div>                  
           </div>';

        ?>
    </form>
</body>

</html>