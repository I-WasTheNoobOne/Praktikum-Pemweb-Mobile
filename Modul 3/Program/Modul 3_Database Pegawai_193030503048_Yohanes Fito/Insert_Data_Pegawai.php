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

//SQL Insert Data Kedalam Tabel DB_Pegawai
$sql = "INSERT INTO Data_Pegawai (ID_Pegawai, Nama_Lengkap, Tanggal_Lahir, Email)
VALUES ('', 'Ronaldo' , '1987-06-24' , 'SemiGOAT@Football.com') ";

if (mysqli_query($conn, $sql)) {
echo "Data Telah Berhasil Dimasukkan";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>