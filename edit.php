<?php 
// Masukkan file koneksi ke file ini
require 'koneksi.php';

// Ambil nilai 'id' yang ada di URL menggunakan GET
$id = $_GET['id'];

// Query untuk mengambil data karyawan berdasarkan id yang didapatkan dari URL
$query = "SELECT * FROM items WHERE id = $id";

// Jalankan query dan hasilnya disimpan di variabel $result
$results = mysqli_query($con, $query);

// Mengubah hasil query menjadi array asosiatif
$show = mysqli_fetch_assoc($results);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Metadata dasar untuk halaman web -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>

    <!-- Link ke file Bootstrap CSS untuk styling -->
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
    <h1>Edit Data</h1>

    <!-- Form untuk mengedit data karyawan -->
    <form action="edit_proses.php" method="POST">
        <!-- Menyimpan id sebagai input tersembunyi untuk diproses saat pengeditan -->
        <input type="hidden" name="id" value="<?= $show['id'] ?>"/>

        <!-- Input untuk nama karyawan -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <!-- Nilai input diisi dengan nama karyawan yang sudah ada -->
            <input type="text" name="name" class="form-control" required value="<?= $show['name'] ?>">
        </div>

        <!-- Input untuk jabatan karyawan -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <!-- Nilai input diisi dengan jabatan yang sudah ada -->
            <input type="text" name="description" class="form-control" required value="<?= $show['description'] ?>">
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <!-- Nilai input diisi dengan jabatan yang sudah ada -->
            <input type="text" name="stock" class="form-control" required value="<?= $show['stock'] ?>">
        </div>

        <!-- Input untuk deskripsi pekerjaan -->
        <div class="mb-3">
        <label for="kondisi" class="form-label">Condition</label>
        <select name="kondisi" class="form-select" required>
            <option value="">Select Condition</option>
            <option value="Used">Used</option>
            <option value="New">New</option>
        </select>
    </div>

        <!-- Tombol untuk menyimpan perubahan -->
        <button type="submit" class="btn btn-md btn-primary">Simpan</button>
    </form>

    <!-- Link ke script Bootstrap JS untuk interaktivitas halaman -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
