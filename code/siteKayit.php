<?php
$si_kod = $_GET["kod"];
$si_data = $_GET["data"];

if ($_GET["edit"] != "false") {
    $si_id = $_GET["edit"];
    $sql = "UPDATE site SET si_data='$si_data' WHERE si_id=$si_id";
} else {
    $si_id = "NULL";
    $sql = "INSERT INTO site  VALUES ($si_id,'$si_kod' ,'$si_data' )";
}

echo $sql;

$sonuc = mysqli_query($con, $sql);


if ($sonuc)
    echo "kaydettim";
else
    echo "KAYIT HATASI";