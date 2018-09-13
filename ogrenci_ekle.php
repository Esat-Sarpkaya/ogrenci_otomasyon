<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="custom.css">
</head>
<body>
<div class="ortala">
    <form action="ogrenciEklemePost.php" method="post">
        <table border="1" width="100%">
            <tr>
                <a href="index.php">Ana Sayfa
            </tr>
            <tr>
                <td>Öğrenci No</td>
                <td><input class="girisInput" type="text" name="ogr_no" id="ogr_no"></td>
            </tr>
            <tr>
                <td>Ad Soyad</td>
                <td><input class="girisInput" type="text" name="ad_soyad" id="ad_soyad"></td>
            </tr>
            <tr>
                <td>Bölüm</td>
                <td>
                    <select class="girisInput" type="text" name="bolum" id="bolum">
                        <option value="Bilgisayar Mühendisliği"> Bilgisayar Mühendisliği </option>
                        <option value="Elektrik-Elektronik Mühendisliği"> Elektrik-Elektronik Mühendisliği </option>
                    </select>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" value="Kaydet" class="girisInput">
                </td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>

<?php
/*<tr>
    <td>Bölüm</td>
    <td><input class="girisInput" type="text" name="bolum" id="bolum"></td>
</tr>

<option value="girisInput">Bilgisayar Mühendisliği</option>
                    <option value="girisInput">Elektrik-Elektronik Mühendisliği</option>

*/
?>