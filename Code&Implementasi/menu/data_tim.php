<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Tim</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <h2 class="text-center mb-4">🏆 Data Tim</h2>

  <table class="table table-striped table-bordered text-center">
    <thead class="table-dark">
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
                <td>{$tim[0]}</td>
                <td>{$tim[1]}</td>
                <td>{$tim[2]}</td>
              </tr>";
        $no++;
      }
      ?>
    </tbody>
  </table>

  <div class="text-center mt-4">
    <a href="../admin/navigasi_admin.php" class="btn btn-secondary">🔙 Kembali ke Navigasi</a>
  </div>
</div>

</body>
</html>
