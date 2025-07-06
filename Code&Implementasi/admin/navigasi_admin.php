<?php
session_start();
include '../module/DLLC_1.php';

// Inisialisasi data menu
$menu = new DoubleCircularLinkedListHeadOnly();
$menu->insert("Data Tim");
$menu->insert("Data Jadwal");
$menu->insert("Klasemen");

// Konversi DLLC ke array untuk navigasi
$menuArray = $menu->toArray();
$total = count($menuArray);

// Ambil index sekarang dari session
if (!isset($_SESSION['menu_index'])) {
    $_SESSION['menu_index'] = 0;
}

if (isset($_GET['nav'])) {
    if ($_GET['nav'] == 'next') {
        $_SESSION['menu_index'] = ($_SESSION['menu_index'] + 1) % $total;
    } elseif ($_GET['nav'] == 'prev') {
        $_SESSION['menu_index'] = ($_SESSION['menu_index'] - 1 + $total) % $total;
    } elseif ($_GET['nav'] == 'enter') {
        $current = $menuArray[$_SESSION['menu_index']];
        switch ($current) {
            case 'Data Tim':
                header("Location: ../menu/data_tim.php");
                exit;
            case 'Data Jadwal':
                header("Location: ../menu/schedule.php");
                exit;
            case 'Klasemen':
                header("Location: ../menu/klasemen.php");
                exit;
        }
    }
}

$current = $menuArray[$_SESSION['menu_index']];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Navigasi Menu Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white">

<div class="container mt-5">
  <h2 class="text-center mb-4">Navigasi Menu Admin</h2>

  <div class="card text-center">
    <div class="card-body">
      <h3 class="card-title">Menu Saat Ini:</h3>
      <p class="display-6"><?= htmlspecialchars($current) ?></p>

      <div class="d-flex justify-content-center gap-3 mt-4">
        <a href="?nav=prev" class="btn btn-secondary">⬅️ Sebelumnya</a>
        <a href="?nav=enter" class="btn btn-success">Pilih Menu ✅</a>
        <a href="?nav=next" class="btn btn-primary">Selanjutnya ➡️</a>
      </div>

      <a href="../index.php" class="btn btn-link mt-3">🔙 Kembali</a>
    </div>
  </div>
</div>

</body>
</html>
