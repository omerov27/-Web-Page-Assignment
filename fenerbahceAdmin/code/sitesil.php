<?php

$id = $_GET["id"];
$sql = "DELETE FROM site WHERE si_id = $id";
echo $sql;
$sonuc = mysqli_query($con, $sql);


if ($sonuc)
    echo "sildim";
else
    echo "SİLME HATASI";