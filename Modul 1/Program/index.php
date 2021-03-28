<!DOCTYPE html>
<html>
	<header>
		<title>MY FAMILY NAMES</title>
		
	</header>
		<body>	
			<div class = "container">
			<div class="box-1">
			<h1>WEBSITE NAMA ANGGOTA KELUARGA</h1>
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<?php
			echo "Selamat Datang di Website Saya, Perkenalkan Saya :";
			echo "<br>";
			echo "Nama : Yohanes Fito";
			echo "<br>";
			echo "NIM  : 193030503048";
			echo "<br>";
			?>

			<h3>BERIKUT ADALAH SILSILAH KELUARGA SAYA :</h4>

			<?php
			$nama = ["TONY","HEFIKA","YOHANES FITO","RYAN"];

			echo "Ayah saya bernama $nama[0],";
			?>
			<?php
			echo "<br>";
			$jumlah_kata = str_word_count($nama[0]);
			echo "Jumlah kata pada nama $nama[0] adalah = $jumlah_kata kata";
			echo "<br>";
			$jumlah_karakter = strlen($nama[0]);
			echo "Jumlah huruf pada nama $nama[0] adalah = $jumlah_karakter huruf";
			echo "<br>";
			$kebalikan_nama =strrev($nama[0]);
			echo "Kebalikan dari nama $nama[0] adalah = $kebalikan_nama";
			echo "<br>";
			echo "Jumlah Konsonan dan Vokal pada nama $nama[0] adalah :";
			echo "<br>";
			$jumlah_konsonan_vokal = str_split($nama[0]);
			foreach ($jumlah_konsonan_vokal as $row) {
 				if(preg_match('/^[AIUEO]/', $row[0]))
 				 	{
   					echo $row[0] ." = vokal <br >" ;
 					 }
 				 else
 					 {
  					echo $row[0] ." = konsonan <br >";
				 	}
				}
			?>

			<?php
			echo "<br>";
			echo "Ibu saya bernama $nama[1],";
			?>
			<?php
			echo "<br>";
			$jumlah_kata = str_word_count($nama[1]);
			echo "Jumlah kata pada nama $nama[1] adalah = $jumlah_kata kata";
			echo "<br>";
			$jumlah_karakter = strlen($nama[1]);
			echo "Jumlah huruf pada nama $nama[1] adalah = $jumlah_karakter huruf";
			echo "<br>";
			$kebalikan_nama =strrev($nama[1]);
			echo "Kebalikan dari nama $nama[1] adalah = $kebalikan_nama";
			echo "<br>";
			echo "Jumlah huruf Konsonan dan Vokal dari $nama[1] adalah :";
			echo "<br>";
			$jumlah_konsonan_vokal = str_split($nama[1]);
			foreach ($jumlah_konsonan_vokal as $row) {
 				if(preg_match('/^[AIUEO]/', $row[0]))
 				 	{
   					echo $row[0] ." = vokal <br >" ;
 					 }
 				 else
 					 {
  					echo $row[0] ." = konsonan <br >";
				 	}
				}
			?>

			<?php
			echo "<br>";
			echo "Nama Saya $nama[2],"
			?>
			<?php 
			echo "<br>";
			$jumlah_kata = str_word_count($nama[2]);
			echo "Jumlah kata pada nama $nama[2] adalah = $jumlah_kata kata";
			echo "<br>";
			$jumlah_karakter = strlen($nama[2]);
			echo "Jumlah huruf pada nama $nama[2] adalah = $jumlah_karakter huruf";
			echo "<br>";
			$kebalikan_nama =strrev($nama[2]);
			echo "Kebalikan dari nama $nama[2] adalah = $kebalikan_nama";
			echo "<br>";
			echo "Jumlah Konsonan dan Vokal pada nama $nama[2] adalah :";
			echo "<br>";
			$jumlah_konsonan_vokal = str_split($nama[2]);
			foreach ($jumlah_konsonan_vokal as $row) {
 				if(preg_match('/^[AIUEO]/', $row[0]))
 				 	{
   					echo $row[0] ." = vokal <br >" ;
 					 }
 				 else
 					 {
  					echo $row[0] ." = konsonan <br >";
				 	}
				}
			?>

			<?php 
			echo "<br>";
			echo "Nama Adik Saya $nama[3],"
			?>
			<?php 
			echo "<br>";
			$jumlah_kata = str_word_count($nama[3]);
			echo "Jumlah kata pada nama $nama[3] adalah = $jumlah_kata kata";
			echo "<br>";
			$jumlah_karakter = strlen($nama[3]);
			echo "Jumlah huruf pada nama $nama[3] adalah = $jumlah_karakter huruf";
			echo "<br>";
			$kebalikan_nama =strrev($nama[3]);
			echo "Kebalikan dari nama $nama[3] adalah = $kebalikan_nama";
			echo "<br>";
			echo "Jumlah Konsonan dan Vokal pada nama $nama[3] adalah :";
			echo "<br>";
			$jumlah_konsonan_vokal = str_split($nama[3]);
			foreach ($jumlah_konsonan_vokal as $row) {
 				if(preg_match('/^[AIUEO]/', $row[0]))
 				 	{
   					echo $row[0] ." = vokal <br >" ;
 					 }
 				 else
 					 {
  					echo $row[0] ." = konsonan <br >";
				 	}
				}
			?>
		</div> 
	</div>
		</body>
</html>