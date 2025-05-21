<?php
// Mengambil nilai 'id' yang ada di URL menggunakan GET
$id = $_GET['id'];

// Masukkan file koneksi ke database
require 'koneksi.php';

// Query untuk mengambil data karyawan berdasarkan id yang ada di URL
$query = "SELECT * FROM items WHERE id = $id";

// Jalankan query dan hasilnya disimpan dalam variabel $result
$results = mysqli_query($con, $query);

// Mengubah hasil query menjadi array asosiatif dan menyimpannya dalam variabel $show
$show = mysqli_fetch_assoc($results);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Metadata dasar untuk halaman web -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Data</title>

    <!-- Link ke Bootstrap CSS untuk styling halaman -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white fw-bold" href="#">Inventory</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-white fw-bold" aria-current="page" href="dashboard.php">Inventory</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white fw-bold" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <!-- Judul halaman -->
    <h1>Detail Data</h1>
    <!-- Menampilkan detail data karyawan yang diambil berdasarkan id -->
    <div>Name: <?=$show["name"]?></div> 
    <div>Description: <?=$show["description"]?></div>
    <div>Stock: <?=$show["stock"]?></div>
    <div>Kondisi:<?=$show ["kondisi"]?></div>
  
    <!-- Link ke Bootstrap JS untuk interaktivitas halaman -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
