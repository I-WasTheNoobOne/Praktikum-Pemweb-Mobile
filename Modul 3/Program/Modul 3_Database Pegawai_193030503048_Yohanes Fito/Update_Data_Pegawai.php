<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB_Pegawai";

// Membuat Koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa Koneksi 
if (!$conn){die("Koneksi Gagal : " . mysqli_connect_error());

}

//SQL untuk Update atau Mengubah Data Tabel
$sql = "UPDATE Data_Pegawai SET Tanggal_Lahir = '1985-01-01' WHERE ID_Pegawai = 1";

if (mysqli_query($conn, $sql)) {
echo "Data Berhasil Diubah";
} else {
echo "Gagal Mengubah Data: " . mysqli_error($conn);
}
mysqli_close($conn);
?>