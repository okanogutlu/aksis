<?php
$f1 = fopen('c:\xampp\sifre.txt', 'r');
while(! feof($f1)){
	$satir = fgets($f1);
	$words = explode(" ", $satir);
	//echo "{$words[0]}({$_GET['kAdi']})-{$words[1]} ({$_GET['sifre']})<br>";
	if($words[0] == $_GET['kAdi'] 
	&& trim($words[1])==$_GET['sifre']){ // aranan degilse
		echo "Hosgeldin ". $_GET['kAdi'];
		exit;
	}
}	
header("location: new1.html");
?>