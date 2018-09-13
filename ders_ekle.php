<html>
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="custom.css">

</head>

<body>
    <div class="ortala">

        <form action="dersEklemePost.php" method="post">
            <table border="1" width="100%">
                <tr>
                    <a href="index.php">Ana Sayfa
                </tr>
                <tr>
                    <td>Dersin Adı</td>
                    <td><input class="girisInput" type="text" name="ders_adi" id="ders_adi"></td>
                </tr>
                <tr>
                    <td>Sınıf</td>
                    <td><input class="girisInput" type="text" name="sinif" id="bolum"></td>
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