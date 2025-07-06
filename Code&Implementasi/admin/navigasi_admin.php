<?php
session_start();
include '../module/DLLC_1.php';

// Inisialisasi menu
$menu = new DoubleCircularLinkedListHeadOnly();
$menu->insert("Data Tim");
$menu->insert("Data Jadwal");
$menu->insert("Klasemen");

$menuArray = $menu->toArray();
$total = count($menuArray);

// Atur index menu
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #f0f4ff, #dbe9f6);
      font-family: 'Segoe UI', sans-serif;
    }
    .card-menu {
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      transition: transform 0.3s ease;
    }
    .card-menu:hover {
      transform: scale(1.02);
    }
    .btn-lg {
      padding: 0.8rem 1.5rem;
      font-size: 1.1rem;
    }
    .title-underline {
      border-bottom: 3px solid #0d6efd;
      display: inline-block;
      padding-bottom: 5px;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="text-center mb-4">
    <h2 class="title-underline fw-bold">🛠️ Navigasi Menu Admin</h2>
    <p class="text-muted">Gunakan tombol navigasi untuk memilih menu yang ingin diakses</p>
  </div>

  <div class="card card-menu text-center p-4 bg-white">
    <div class="card-body">
      <h4 class="mb-3">Menu Saat Ini:</h4>
      <p class="display-6 text-primary fw-semibold"><?= htmlspecialchars($current) ?></p>

      <div class="d-flex justify-content-center gap-3 mt-4">
        <a href="?nav=prev" class="btn btn-outline-secondary btn-lg">
          <i class="bi bi-arrow-left-circle-fill me-1"></i> Sebelumnya
        </a>
        <a href="?nav=enter" class="btn btn-success btn-lg">
          <i class="bi bi-check-circle-fill me-1"></i> Pilih Menu
        </a>
        <a href="?nav=next" class="btn btn-outline-primary btn-lg">
          Selanjutnya <i class="bi bi-arrow-right-circle-fill ms-1"></i>
        </a>
      </div>

      <a href="../index.php" class="btn btn-link mt-4">
        <i class="bi bi-arrow-left"></i> Kembali ke Menu Utama
      </a>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
