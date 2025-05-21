<?php
// Masukkan file koneksi untuk menghubungkan ke database
require 'koneksi.php';

// Mengecek apakah form disubmit menggunakan metode POST
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Mengambil nilai 'id' yang dikirim melalui POST
    $id = $_POST['id'];

    // Query untuk menghapus data karyawan berdasarkan id
    $query = "DELETE FROM items WHERE id = $id";

    // Menjalankan query DELETE
    if (mysqli_query($con, $query)) {
        // Jika query berhasil, redirect ke halaman index.php
        echo "<meta http-equiv='refresh' content='1;url=dashboard.php'>";     
    } else {
        // Jika query gagal, tampilkan pesan error
        echo mysqli_error($con);
        echo "<meta http-equiv='refresh' content='5;url=index.php'>";
    }
}
?>
