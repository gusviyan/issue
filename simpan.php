<?php
// Sertakan file config.php untuk koneksi database
require_once 'config.php';

// Cek apakah form disubmit menggunakan POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $kategori = $_POST['kategori'];
    $detail = $_POST['detail'];
    $unit = $_POST['unit'];
    $priority = $_POST['priority'];

    // Mendapatkan koneksi database
    $conn = getDB();

    // Siapkan query untuk menyimpan data
    $sql = "INSERT INTO reports (kategori, detail, unit, priority) 
            VALUES (:kategori, :detail, :unit, :priority)";

    // Siapkan statement
    $stmt = $conn->prepare($sql);

    // Binding parameter ke query
    $stmt->bindParam(':kategori', $kategori);
    $stmt->bindParam(':detail', $detail);
    $stmt->bindParam(':unit', $unit);
    $stmt->bindParam(':priority', $priority);

    // Eksekusi query
    if ($stmt->execute()) {
        header("Location: success.php");
        exit();
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
} else {
    echo "Form tidak disubmit dengan benar.";
}
?>
