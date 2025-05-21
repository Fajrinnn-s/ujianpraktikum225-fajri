<?php
// Menghubungkan ke file koneksi database
require 'koneksi.php';

// Query untuk mengambil semua data dari tabel karyawan
$query = "SELECT * FROM items";

// Menjalankan query dan menyimpan hasilnya ke variabel $results
$results = mysqli_query($con, $query);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Metadata dasar -->
     
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title></title>
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


    <!-- Link ke Bootstrap CSS untuk styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container mt-4">
      <!-- Judul halaman -->
      <center><h1>Dashboard Item</h1></center>

      <!-- Tombol untuk berpindah kehalaman tambah data -->
      <a href="tambah.php" class="btn btn-primary mb-3">Tambah Data</a>

      <!-- Tabel untuk menampilkan data karyawan -->
      <table class="table table-bordered">
        <thead class="table-light">
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Stock</th>
            <th>Kondisi</th> 
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Mengecek apakah ada data yang ditemukan
          if (mysqli_num_rows($results) > 0) {
              $no = 1; // Nomor urut
              // Mengambil data satu per satu
              while ($show = mysqli_fetch_assoc($results)) {
                  echo "
                  <tr>
                    <td>{$no}</td>
                    <td>{$show['name']}</td>
                    <td>{$show['description']}</td>
                    <td>{$show['stock']}</td>
                    <td>{$show['kondisi']}</td>
                    <td>
                      <!-- Tombol untuk berpindah kehalaman detail -->
                      <a href='detail.php?id={$show['id']}' class='btn btn-info btn-sm'>Detail</a>

                      <!-- Tombol untuk berpindah kehalaman edit -->
                      <a href='edit.php?id={$show['id']}' class='btn btn-warning btn-sm'>Edit</a>

                      <!-- Form hapus data, dikirim via POST ke hapus_proses.php melalui id data tersebut -->
                      <form action='hapus_proses.php' method='POST' style='display:inline-block;'>
                        <input type='hidden' name='id' value='{$show['id']}'/>
                        <!-- Tombol untuk Menghapus Data-->
                        <button type='submit' class='btn btn-danger btn-sm' onclick=\"return confirm('Yakin ingin menghapus?')\">Hapus</button>
                      </form>
                    </td>
                  </tr>";
                  $no++; // Menambah nomor urut
              }
          } else {
              // Tampilkan pesan jika tidak ada data
              echo "<tr><td colspan='5' class='text-center text-danger'>Data tidak ada</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>

    <!-- Script Bootstrap JS untuk interaksi yang responsif -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
