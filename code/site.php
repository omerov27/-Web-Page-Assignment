
<?php

$sql = "select * from site where si_kod='$link'";
//echo $sql;
$sonuc = mysqli_query($con, $sql);

while ($satir = mysqli_fetch_array($sonuc)) {
    $id=$satir["si_id"];
    echo "\n<br><a href=?link=sitesil&id=$id>\n";
    echo '<i class="bi bi-trash"></i></a>';

    echo "<a href=?link=siteEkle&id=$id>\n";
    echo '<i class="bi bi-pencil-square"></i></i></a><br>\n';
    echo $satir["si_data"];
    
}


echo "<p> yeni metin eklemek için <a href=?link=siteEkle&kod=$link> tıklayınız </a>";