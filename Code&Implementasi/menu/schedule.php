<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Jadwal Pertandingan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <h2 class="text-center mb-4">📅 Jadwal Pertandingan</h2>

  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead class="table-dark text-center">
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>Waktu</th>
          <th>Tim 1</th>
          <th>Tim 2</th>
          <th>Tempat</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <?php
        // Contoh data dummy jadwal
        $jadwal = [
          ["tanggal" => "2025-07-10", "waktu" => "16:00", "tim1" => "Evos", "tim2" => "DEWA", "tempat" => "MPL ARENA"],
          ["tanggal" => "2025-07-11", "waktu" => "18:00", "tim1" => "RRQ", "tim2" => "GEEK FAM", "tempat" => "MPL ARENA"],
          ["tanggal" => "2025-07-12", "waktu" => "15:30", "tim1" => "BTR", "tim2" => "ONIC", "tempat" => "MPL ARENA"],
        ];

        $no = 1;
        foreach ($jadwal as $item) {
          echo "<tr>
                  <td>{$no}</td>
                  <td>{$item['tanggal']}</td>
                  <td>{$item['waktu']}</td>
                  <td>{$item['tim1']}</td>
                  <td>{$item['tim2']}</td>
                  <td>{$item['tempat']}</td>
                  ";
          $no++;
        }
        ?>
      </tbody>
    </table>
  </div>

  <div class="text-center mt-4">
    <a href="../admin/navigasi_admin.php" class="btn btn-secondary">🔙 Kembali ke Menu Admin</a>
  </div>
</div>

</body>
</html>
