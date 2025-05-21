<!doctype html>
<html lang="en">
  <head>
    <!-- Metadata dasar untuk halaman web -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah data</title>

    <!-- Link ke file CSS Bootstrap untuk styling halaman -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <h1>Add Data</h1>

    <!-- Form untuk menambah data karyawan -->
    <form action="tambah_proses.php" method="POST">
        <!-- Input untuk Nama Karyawan -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <!-- Field input untuk nama karyawan, menggunakan class 'form-control' dari Bootstrap -->
            <input type="text" name="name" class="form-control" required>
        </div>

        <!-- Input untuk Jabatan Karyawan -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
           
            <input type="text" name="description" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="text" name="stock" class="form-control" required>
        </div>
         <div class="mb-3">
        <label for="kondisi" class="form-label">Condition</label>
        <select name="kondisi" class="form-select" required>
            <option value="">Select Condition</option>
            <option value="Used">Used</option>
            <option value="New">New</option>
        </select>
    </div>

        <!-- Tombol untuk menyimpan data -->
        <button type="submit" class="btn btn-md btn-primary">Simpan</button>
    </form>

    <!-- Link ke file JS Bootstrap untuk memberikan interaktivitas pada halaman -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
