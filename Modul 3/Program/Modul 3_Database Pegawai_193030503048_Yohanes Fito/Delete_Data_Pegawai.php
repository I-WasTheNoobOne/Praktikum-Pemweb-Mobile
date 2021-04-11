<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB_Pegawai";

// Membuat Koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi 
if (!$conn){
die("Koneksi Gagal : " . mysqli_connect_error());
}

// sql untuk menghapus record
$sql = "DELETE FROM Data_Pegawai WHERE ID_Pegawai = 3";

if (mysqli_query($conn, $sql)) {
echo "Record Data Tabel Berhasil Dihapus";
} else {
echo "Error Saat Ingin Menghapus Data Record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>