<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "select * from site where si_id='$id'";
    $sonuc = mysqli_query($con, $sql);
    $satir = mysqli_fetch_array($sonuc);
    $kod = $satir["si_kod"];
    $data = $satir["si_data"];
} else {
    $id = "false";
    $kod=  $_GET["kod"];  
}
?>




<form action="index.php" method="get">
    <input type="hidden" name="link" value="siteKayit">
    <input type="hidden" name="edit" value="<?php echo $id ?>">
    İlgili Sayfanın Kodu: <br>
    <input type="text" name="kod" id="kod" value="<?php echo $kod ?>" readonly> <br>

    Eklenecek HTML kod: <br>
    <textarea name="data" id="data" rows="8" cols="70"><?php if(isset($data)) echo $data ?></textarea><br>

    <input type="submit" value="Kaydet">


</form>