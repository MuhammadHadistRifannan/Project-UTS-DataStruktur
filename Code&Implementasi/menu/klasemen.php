<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Klasemen Tim</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <h2 class="text-center mb-4">🎮 Klasemen Turnamen eSports</h2>

  <table class="table table-bordered table-striped text-center">
    <thead class="table-dark">
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
      // Data dummy eSports standings
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

      // Hitung Win Rate dan urutkan
      foreach ($standings as &$team) {
        $team[] = round(($team[2] / $team[1]) * 100, 1); // Win Rate %
      }
      unset($team);

      usort($standings, function($a, $b) {
        return $b[2] <=> $a[2]; // Sort by Win
      });

      $pos = 1;
      foreach ($standings as $team) {
        echo "<tr>
                <td>{$pos}</td>
                <td>{$team[0]}</td>
                <td>{$team[1]}</td>
                <td>{$team[2]}</td>
                <td>{$team[3]}</td>
                <td>{$team[4]}</td>
                <td>{$team[5]}</td>
                <td>{$team[6]}%</td>
              </tr>";
        $pos++;
      }
      ?>
    </tbody>
  </table>

  <div class="text-center mt-4">
    <a href='../admin/navigasi_admin.php' class='btn btn-secondary'>🔙 Kembali ke Navigasi</a>
  </div>
</div>

</body>
</html>
