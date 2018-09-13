<?php
$ogr_no=$_GET['ogr_no'];
$sinif=$_GET['sinif'];
$bolum="";
include 'baglan.php';

$sqlBolum="select bolum from ogrenci where ogr_no='".$ogr_no."'";
if ($sorgu2 = mysqli_query($conn, $sqlBolum)) {
    while ($row = mysqli_fetch_array($sorgu2)) {
        $bolum=$row['bolum'];
    }
}

$data=array();
$sql = "select * from ders WHERE sinif='".$sinif."' and bolum='".$bolum."'";
if ($sorgu = mysqli_query($conn, $sql)) {
    while ($row = mysqli_fetch_array($sorgu)) {
        array_push($data,$row['ders_id'],$row['ders_adi']);
    }
}
else{
    array_push($data,'db hatasi');
}
//array_push($data,$ogr_no,$bolum,$sinif);
echo json_encode($data,JSON_UNESCAPED_UNICODE);
?>