//Database ini menggunakan inputan dalam, bukan inputan user
<?php
        $servername ="localhost";
        $username   ="root";
        $password   ="";

//membuat link atau hubungan
$conn = new mysqli($servername,$username,$password);

//memeriksa link atau hubungan
if ($conn->connect_error){
        die("Koneksi Gagal : " . $conn->connect_error);
    } 
    echo "Berhasil Terhubung";
?>
