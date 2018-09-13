<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="custom.css">
</head>
<body>
<div class="ortala">
    <form action="" method="post">
        <table border="1" width="100%">
            <tr>
                <a href="index.php">Ana Sayfa</a>
            </tr>
            <tr>
                <td>Öğrenci No</td>
                <td><input class="girisInput" type="text" name="ogr_no" id="ogr_no" onchange="showOgr(this.value)"></td>
            </tr>
            <tr>
                <td>Ad Soyad</td>
                <td><input class="girisInput" type="text" name="ad_soyad" id="ad_soyad" readonly></td>
            </tr>
            <tr>
                <td>Bolum</td>
                <td><input class="girisInput" type="text" name="bolum" id="bolum" readonly></td>
            </tr>
            <tr>
                <td>Sınıf</td>
                <td><input class="girisInput" type="text" name="sinif" id="sinif" ></td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" value="Kaydet" class="girisInput">
                </td>
            </tr>
        </table><br><br><br>

        <table border="1" width="100%" id="dersler">
            <tr>
                Dersler
            </tr>
        </table>
    </form>
</div>
<script>
    function showOgr(ogrno) {

        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function () {
          if (this.readyState==4 && this.status==200){
              var gelen=this.responseText;
              var gelen_dizi = JSON.parse("[" + gelen + "]")+"";
              var degerler=gelen_dizi.split(",");

              var ad_soyad=degerler[0];
              var bolum=degerler[1];
              var sinif=degerler[2];

              document.getElementById('ad_soyad').value=ad_soyad;
              document.getElementById('bolum').value=bolum;
              document.getElementById('sinif').value=sinif;
              dersler(sinif,ogrno);
          }
        };

        xmlhttp.open("GET","show_ogrenci.php?ogr_no="+ogrno,true);
        xmlhttp.send();
    }

    function dersler(sinif,ogrno) {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function () {
            if (this.readyState==4 && this.status==200){
                var gelen=this.responseText;
               var gelen_dizi = JSON.parse("[" + gelen + "]")+"";
                var degerler=gelen_dizi.split(",");
                var i=0;
                var tr;
                var table=document.getElementById('dersler');
                while(i<degerler.length){
                    tr = document.createElement('tr');

                    var label = document.createElement("labek");
                    label.type = "label";
                    label.innerHTML = degerler[i+1];
                    tr.appendChild(label);

                    var newCheckbox = document.createElement("input");
                    newCheckbox.type = "checkbox";
                    newCheckbox.value = degerler[i];
                    tr.appendChild(newCheckbox);
                    table.appendChild(tr);
                    i=i+2;
                }
            }
        };

        xmlhttp.open("GET","show_ders.php?ogr_no="+ogrno+"&sinif="+sinif,true);
        xmlhttp.send();
    }
</script>
</body>
</html>
