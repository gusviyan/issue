<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Issue Report</title>
  <!-- Add Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">

</head>

<body>

  <!-- Header with Company Logo -->
  <header class="header">
    <div class="container">
      <img src="images\logors.png" alt="Company Logo" class="logo">
    </div>
  </header>

  <div class="container mt-5">
    <h1 class="text-center">Form Report Issue IT</h1>

    <form class="form-horizontal" method="post" action="simpan.php">
      <fieldset>

        <div class="form-group row">
          <label class="col-md-4 col-form-label" for="kategori">Kategori</label>
          <div class="col-md-8">
            <select id="kategori" name="kategori" class="form-control" required="">
              <option value="" disabled selected>Select Kategori</option>
              <option value="komputer">Komputer</option>
              <option value="laptop">Laptop</option>
              <option value="internet">Internet</option>
              <option value="eklaim">E Klaim</option>
              <option value="vclaim">Vclaim</option>
              <option value="dashboard">Dashboard</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-4 col-form-label" for="keluhan">Detail Masalah</label>
          <div class="col-md-8">
            <textarea id="detail" name="detail" placeholder="" class="form-control" required="" rows="4"></textarea>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-4 col-form-label" for="unit">Unit Pelapor</label>
          <div class="col-md-8">
            <select id="unit" name="unit" class="form-control" required="">
              <option value="poli">Poliklinik</option>
              <option value="" disabled selected>Select Unit</option>
              <option value="fisio">Fisioterapi</option>
              <option value="radiologi">Radiologi</option>
              <option value="lab">Laboratorium</option>
              <option value="gudang">Gudang Farmasi</option>
              <option value="ok">Ruang operasi</option>
              <option value="zamrud">Zamrud</option>
              <option value="farmasi">Farmasi</option>
              <option value="casemix">Casemix</option>
              <option value="hcu">HCU/ICU</option>
              <option value="mutiara">Mutiara</option>
              <option value="emerald">Emerald</option>
              <option value="berlian">Berlian</option>
              <option value="ruby">Ruby</option>
              <option value="hd">Hemodialisa</option>
              <option value="nicu">NICU/PICU</option>
              <option value="gizi">Gizi</option>
              <option value="marketing">Marketing</option>
              <option value="gudang">Gudang Farmasi</option>
              <option value="rm">Rekam Medis</option>
              <option value="umum">Umum</option>
              <option value="logistik">Logistik</option>
              <option value="office">Office</option>
              <option value="ppi">PPI</option>
              <option value="mutu">Komite Mutu</option>
              <option value="keperawatan">Komite Keperawatan</option>
              <option value="keperawatan">Admission</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-4 col-form-label" for="priority">Priority</label>
          <div class="col-md-8">
            <select id="priority" name="priority" class="form-control" required="">
              <option value="" disabled selected>Select Priority</option>
              <option value="low">Low</option>
              <option value="medium">Medium</option>
              <option value="high">High</option>
            </select>
          </div>
        </div>

        <!-- Submit Button -->
        <div class="form-group row">
          <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>

      </fieldset>
    </form>
  </div>

<!-- Footer -->
<footer class="footer">
  <div class="container text-center">
    <p><a href="https://docs.google.com/spreadsheets/d/1Vn_CaKmZ1C_wObIxqp2Wv7RkglEsKfhITCL0Gjdpszc/edit?gid=1055119948#gid=1055119948">Klik disni untuk melihat progress laporan sebelumnya</a></p>
  </div>
</footer>

<footer class="footer2">
  <div class="container text-center">
    <p>&copy; 2024 IT RS Permata Pamulang. All Rights Reserved.</p>
  </div>
</footer>


  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const select = document.getElementById("unit");
      const options = Array.from(select.options);

      // Sort options based on their text
      options.sort((a, b) => a.text.localeCompare(b.text));

      // Remove existing options
      select.innerHTML = "";

      // Append sorted options
      options.forEach(option => select.appendChild(option));
    });
  </script>

</body>

</html>
