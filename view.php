<?php
// Sertakan file config.php untuk koneksi database
require_once 'config.php';

// Mendapatkan koneksi database
$conn = getDB();

// Query untuk mengambil semua data laporan dari tabel
$sql = "SELECT * FROM reports";
$stmt = $conn->prepare($sql);

// Eksekusi query
$stmt->execute();

// Ambil semua data
$reports = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Reports</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

  <div class="container mt-5">
    <h1 class="text-center">Data Laporan Masalah</h1>
    
    <!-- Tabel untuk menampilkan laporan -->
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Kategori</th>
          <th scope="col">Detail Masalah</th>
          <th scope="col">Unit Pelapor</th>
          <th scope="col">Priority</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Menampilkan data laporan
        if ($reports) {
          foreach ($reports as $report) {
            echo "<tr>
                    <td>{$report['id']}</td>
                    <td>{$report['created_at']}</td>
                    <td>{$report['kategori']}</td>
                    <td>{$report['detail']}</td>
                    <td>{$report['unit']}</td>
                    <td>{$report['priority']}</td>
                  </tr>";
          }
        } else {
          echo "<tr><td colspan='5' class='text-center'>Tidak ada laporan yang ditemukan</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

</body>

</html>
