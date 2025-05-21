<?php
// Masukkan file koneksi untuk menghubungkan ke database
require "koneksi.php";

// Mengecek apakah form disubmit menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil dan menyanitasi input dari form untuk menghindari XSS
    $Name = htmlspecialchars($_POST["name"]);
    $Description = htmlspecialchars($_POST["description"]);
    $Stock = htmlspecialchars($_POST["stock"]);
    $Kondisi = htmlspecialchars($_POST["kondisi"]);

    // Membuat query INSERT untuk memasukkan data ke tabel 'items'
    $query = "INSERT INTO items (name, description, stock, kondisi)
              VALUES ('$Name', '$Description', '$Stock', '$Kondisi')";

    // Menjalankan query untuk menyimpan data
    $results = mysqli_query($con, $query);

    // Mengecek apakah query berhasil
    if ($results) {
        // Jika berhasil, arahkan kembali ke halaman dashboard.php setelah 1 detik
        echo "<meta http-equiv='refresh' content='1;url=dashboard.php'>";
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error dari MySQL
        echo mysqli_error($con);
    }

    // Menutup koneksi setelah query selesai
    mysqli_close($con);
}
?>
