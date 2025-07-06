<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Jadwal Pertandingan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #f1f3f6, #e7f1fa);
      font-family: 'Segoe UI', sans-serif;
    }
    .card-table {
      border-radius: 14px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.1);
    }
    .table tbody tr:hover {
      background-color: #f0f9ff;
    }
    .badge-arena {
      background-color: #0d6efd;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="text-center mb-4">
    <h2 class="fw-bold"><i class="bi bi-calendar-event-fill text-primary"></i> Jadwal Pertandingan</h2>
    <p class="text-muted">Daftar pertandingan eSports yang akan datang</p>
  </div>

  <div class="card card-table p-4 bg-white">
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-primary">
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Tim 1</th>
            <th>Tim 2</th>
            <th>Tempat</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $jadwal = [
            ["tanggal" => "2025-07-10", "waktu" => "16:00", "tim1" => "Evos", "tim2" => "DEWA", "tempat" => "MPL ARENA"],
            ["tanggal" => "2025-07-11", "waktu" => "18:00", "tim1" => "RRQ", "tim2" => "GEEK FAM", "tempat" => "MPL ARENA"],
            ["tanggal" => "2025-07-12", "waktu" => "15:30", "tim1" => "BTR", "tim2" => "ONIC", "tempat" => "MPL ARENA"],
          ];

          $no = 1;
          foreach ($jadwal as $item) {
            echo "<tr>
                    <td>{$no}</td>
                    <td><i class='bi bi-calendar3'></i> {$item['tanggal']}</td>
                    <td><i class='bi bi-clock'></i> {$item['waktu']}</td>
                    <td><strong>{$item['tim1']}</strong></td>
                    <td><strong>{$item['tim2']}</strong></td>
                    <td><span class='badge badge-arena text-white'>{$item['tempat']}</span></td>
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
      <i class="bi bi-arrow-left-circle"></i> Kembali ke Menu Admin
    </a>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
