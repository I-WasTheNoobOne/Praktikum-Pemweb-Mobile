<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB_Pegawai";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa Koneksi 
if (!$conn){
die("Koneksi Gagal : " . mysqli_connect_error());

}

//Menampilkan atau Memilih Data/Record Dari Tabel
$sql = "SELECT ID_Pegawai, Nama_Lengkap, Tanggal_Lahir, Email FROM 
Data_Pegawai"; $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

// SQL Menampilkan data pada setiap baris 
while($row = mysqli_fetch_assoc($result)) {
echo " - ID PEGAWAI : " . $row["ID_Pegawai"]. 
"<br>".
" - NAMA LENGKAP : " . $row["Nama_Lengkap"]. 
"<br>".
" - TANGGAL LAHIR : " .$row["Tanggal_Lahir"]. 
"<br>".
" - EMAIL : " . $row["Email"]. 
"<br>".
"<br>";
}
} else {
echo "Tidak Ada Data Terpilih";
}
mysqli_close($conn);
?>
