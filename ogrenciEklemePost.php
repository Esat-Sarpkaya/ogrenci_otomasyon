<?php
include 'baglan.php';
if ((strlen($_POST['ogr_no']) > 0) && (strlen($_POST['ad_soyad']) > 0) && (strlen($_POST['bolum']) > 0))
{
    $ogrno = $_POST['ogr_no'];
    $ad_soyad = $_POST['ad_soyad'];
    $bolum = $_POST['bolum'];

    $sql = "INSERT INTO ogrenci (ogr_no, ad_soyad, bolum) VALUES ('".$ogrno."', '".$ad_soyad."', '".$bolum."')";

    if(mysqli_query($conn,$sql))
    {
        $sorguders = "Select * from ders WHERE sinif='1' AND bolum='" . $bolum . "'";
        if ($sorgu = mysqli_query($conn, $sorguders))
        {

            while ($row = mysqli_fetch_assoc($sorgu))
            {
                $sql2="insert into ogrenci_ders (ogr_no,ders_id) VALUES ('".$ogrno."','".$row['ders_id']."')";
                mysqli_query($conn,$sql2);
            }
        }

        echo 'Yeni Öğrenci Kaydı Yapıldı';
        header("Refresh: 2; url=ogrenci_ekle.php");
    }
    else
    {
        echo 'Hata : '.mysqli_error($conn);
    }
}
else
{
    echo 'Verileri Eksiksiz Girin';
    header("Refresh: 5; url=ogrenci_ekle.php");
}
?>