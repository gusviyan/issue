<?php
// Konfigurasi database
define('DB_SERVER', 'localhost');    // Ganti dengan server database Anda
define('DB_USERNAME', 'root');       // Ganti dengan username database Anda
define('DB_PASSWORD', 'root');           // Ganti dengan password database Anda
define('DB_NAME', 'issue_reports');  // Ganti dengan nama database Anda

// Membuat koneksi ke database MySQL
function getDB() {
    $dbConnection = null;

    try {
        // Membuat koneksi menggunakan PDO
        $dbConnection = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        // Set error mode untuk PDO
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        // Jika terjadi error koneksi
        echo "Connection failed: " . $e->getMessage();
    }

    return $dbConnection;
}
?>
