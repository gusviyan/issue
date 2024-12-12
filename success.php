<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Success</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background: linear-gradient(to bottom, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.8)),
        url('images/help.png') no-repeat center center fixed;
      background-size: cover;
      font-family: Arial, sans-serif;
    }

    .success-container {
      text-align: center;
      background: #fff;
      border-radius: 10px;
      padding: 40px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .success-container img {
      width: 100px;
      margin-bottom: 20px;
    }

    .success-container h1 {
      font-size: 24px;
      color: #28a745;
    }

    .success-container p {
      color: #6c757d;
    }

    .success-container a {
      margin-top: 20px;
      display: inline-block;
      padding: 10px 20px;
      color: #fff;
      background: #007bff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .success-container a:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <div class="success-container">
    <img src="images/success.png" alt="Success Icon">
    <h1>Laporan Berhasil Disimpan</h1>
    <p>Terima kasih! Laporan Anda telah berhasil kami terima dan segera ditindak lanjuti.</p>
    <a href="index.html">Kembali ke Halaman Utama</a>
  </div>
</body>

</html>
