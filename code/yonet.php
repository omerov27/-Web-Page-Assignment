<?php
if (isset($_GET["link"])) {
    $link = $_GET["link"];
} else
    $link = "main";

$back = "back1";
switch ($link) {
    case "gal":
    case "ref":
    case "hak":
    case "ilet":
    case "main":
        $dosya = "code/site.php";
        break;

    case "sitesil":
    case "siteEkle":
    case "siteKayit":
    case "futbolcu":
        $dosya = "code/$link.php";
        break;
    default:
        $dosya = "code/main.php";
        break;
}
?>