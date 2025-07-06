<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Klasemen Tim</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #f1f3f6, #e2ecf5);
      font-family: 'Segoe UI', sans-serif;
    }
    .table thead th {
      vertical-align: middle;
    }
    .table tbody tr:hover {
      background-color: #e6f0ff;
    }
    .badge-win {
      background-color: #198754;
    }
    .badge-lose {
      background-color: #dc3545;
    }
    .badge-rate {
      background-color: #0d6efd;
    }
    .card-table {
      border-radius: 14px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="text-center mb-4">
    <h2 class="fw-bold"><i class="bi bi-trophy-fill text-warning"></i> Klasemen Turnamen eSports</h2>
    <p class="text-muted">Statistik performa tim selama kompetisi</p>
  </div>

  <div class="card card-table p-4 bg-white">
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-primary">
          <tr>
            <th>Pos</th>
            <th>Tim</th>
            <th>Match</th>
            <th>Win</th>
            <th>Lose</th>
            <th>Game Win</th>
            <th>Game Lose</th>
            <th>Win Rate</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Data dummy
          $standings = [
            ["Evos", 6, 5, 1, 10, 4],
            ["RRQ", 6, 4, 2, 9, 5],
            ["Onic", 6, 4, 2, 8, 6],
            ["Alter Ego", 6, 3, 3, 7, 7],
            ["Geek", 6, 2, 4, 5, 9],
            ["BTR", 6, 2, 4, 4, 10],
            ["Dewa", 6, 1, 5, 3, 11],
            ["Tlid", 6, 1, 5, 2, 12],
            ["Navi", 6, 0, 6, 1, 13]
          ];

          // Hitung win rate dan urutkan
          foreach ($standings as &$team) {
            $team[] = round(($team[2] / $team[1]) * 100, 1); // index ke-6: win rate
          }
          unset($team);

          usort($standings, fn($a, $b) => $b[2] <=> $a[2]); // sort by win desc

          $pos = 1;
          foreach ($standings as $team) {
            echo "<tr>
                    <td><strong>{$pos}</strong></td>
                    <td><strong>{$team[0]}</strong></td>
                    <td>{$team[1]}</td>
                    <td><span class='badge badge-win text-white'>{$team[2]}</span></td>
                    <td><span class='badge badge-lose text-white'>{$team[3]}</span></td>
                    <td>{$team[4]}</td>
                    <td>{$team[5]}</td>
                    <td><span class='badge badge-rate text-white'>{$team[6]}%</span></td>
                  </tr>";
            $pos++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <div class="text-center mt-4">
    <a href='../admin/navigasi_admin.php' class='btn btn-outline-secondary'>
      <i class="bi bi-arrow-left-circle"></i> Kembali ke Navigasi
    </a>
  </div>
</div>

<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
