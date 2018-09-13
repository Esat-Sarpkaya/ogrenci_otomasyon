<?php
$ogr_no=$_GET['ogr_no'];
include 'baglan.php';
$data=array();
$sql = "select * from ogrenci WHERE ogr_no='".$ogr_no."'";
if ($sorgu = mysqli_query($conn, $sql)) {
    while ($row = mysqli_fetch_array($sorgu)) {
        array_push($data,$row['ad_soyad'],$row['bolum'],$row['sinif']);
    }
}
else{
    array_push($data,'db hatasi');
}

echo json_encode($data,JSON_UNESCAPED_UNICODE);
?>