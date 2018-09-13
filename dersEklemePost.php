<?php
include 'baglan.php';
if ((strlen($_POST['sinif']) > 0) && (strlen($_POST['ders_adi']) > 0) && (strlen($_POST['bolum']) > 0))
{
    $sinif = $_POST['sinif'];
    $ders_adi = $_POST['ders_adi'];
    $bolum = $_POST['bolum'];

    $sql = "INSERT INTO ders ( ders_adi, sinif, bolum )
            VALUES ( '" . $ders_adi . "', '" . $sinif . "', '" . $bolum . "')";

    if (mysqli_query($conn, $sql))
    {
        echo 'Yeni Ders Kaydı Yapıldı';
        header("Refresh: 2; url=ders_ekle.php");
    }
    else
    {
        echo 'Hata : ' . mysqli_error($conn);
    }
}
else
    {
        echo 'Verileri Eksiksiz Girin';
        header("Refresh: 5; url=ders_ekle.php");
    }
?>