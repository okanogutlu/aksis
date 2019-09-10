<html>
<head></head>
<body>
<?php
$baglan = mysql_connect('localhost', 'root', '', 'okul') or die(mysql_error());
 mysql_select_db('okul',$baglan) or die(mysql_error());
echo "
<form  \"POST\">
     <h3>Yeni Ogrenci</h3>
	<table>
	<tr><td>No</td> <td><input name=no type=text></td></tr>
	<tr><td>Adi</td> <td><input name=adi type=text></td></tr>
	<tr><td>Soyadi</td> <td><input name=soyadi type=text></td></tr>
	<tr><td>Bolum</td> <td><input name=bolum type=text></td></tr>
	<tr><td></td> <td><input name=tamam type=submit value=Olustur></td></tr>
	</table>
	</form>

";

    
        // Form Gönderilmişmi Kontrolü Yapalım
        if($_POST){
        
            // Formdan Gelen Kayıtlar
            $no        =    $_POST["no"];
            $adi    =    $_POST["adi"];
            $soyadi= $_POST["soyadi"];
			$bolum=$_POST["bolum"];
            // Veritabanına Ekleyelim.
            $ekle        =    mysql_query("insert into s  values ('$no','$adi','$soyadi','$bolum')");
            
            // Sorun Oluştu mu diye test edelim. Eğer sorun yoksa hata vermeyecektir
            if($ekle){
                echo "Başarılı Bir Şekilde Eklendi !";
            }else{
                echo "Bir Sorun Oluştu";
            }
        }
    






?>
</body>
</HTML>