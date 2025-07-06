<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Tim</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #e9f1f7, #f6fafd);
      font-family: 'Segoe UI', sans-serif;
    }
    .table thead th {
      vertical-align: middle;
    }
    .table tbody tr:hover {
      background-color: #f1f9ff;
    }
    .card {
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="text-center mb-4">
    <h2 class="fw-bold"><i class="bi bi-people-fill"></i> Data Tim eSports</h2>
    <p class="text-muted">Informasi lengkap mengenai tim yang berpartisipasi</p>
  </div>

  <div class="card p-4">
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-primary">
          <tr>
            <th>No</th>
            <th>Nama Tim</th>
            <th>Kota Asal</th>
            <th>Pelatih</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $dataTim = [
            ["Evos", "Jakarta", "Coach Doni"],
            ["RRQ", "Bandung", "Coach Rio"],
            ["Onic", "Surabaya", "Coach Jaya"],
            ["Geek", "Semarang", "Coach Bima"],
            ["Dewa", "Tangerang", "Coach Adi"],
            ["BTR", "Bekasi", "Coach Fikri"],
            ["Alter Ego", "Yogyakarta", "Coach Niko"],
            ["Tlid", "Depok", "Coach Aldi"],
            ["Navi", "Bali", "Coach Rangga"]
          ];
          $no = 1;
          foreach ($dataTim as $tim) {
            echo "<tr>
                    <td>{$no}</td>
                    <td><strong>{$tim[0]}</strong></td>
                    <td>{$tim[1]}</td>
                    <td>{$tim[2]}</td>
                  </tr>";
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <div class="text-center mt-4">
    <a href="../admin/navigasi_admin.php" class="btn btn-outline-secondary">
      <i class="bi bi-arrow-left-circle"></i> Kembali ke Navigasi
    </a>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
