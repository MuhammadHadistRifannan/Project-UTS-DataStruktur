<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Menu Utama - Sistem Navigasi</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #eef2f3, #8e9eab);
        }

        .card-menu {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card-menu:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }

        .icon-circle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 28px;
            color: #0d6efd;
        }

        .btn-lg {
            font-size: 1.1rem;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold">🎮 NAVIGASI UTAMA</h1>
        <p class="lead text-muted">Pilih menu untuk mengakses fitur yang tersedia</p>
    </div>

    <div class="row justify-content-center g-4">
        <div class="col-md-5">
            <div class="card card-menu shadow-sm p-4 text-center bg-white">
                <div class="icon-circle"><i class="bi bi-gear-fill"></i></div>
                <h4 class="mb-3">Menu Admin</h4>
                <p class="text-muted">Kelola data tim, jadwal, laporan dan lainnya</p>
                <a href="admin/navigasi_admin.php" class="btn btn-primary btn-lg w-100">
                    <i class="bi bi-arrow-right-circle-fill me-2"></i> Masuk Admin
                </a>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card card-menu shadow-sm p-4 text-center bg-white">
                <div class="icon-circle text-success"><i class="bi bi-play-btn-fill"></i></div>
                <h4 class="mb-3">Playlist Highlight</h4>
                <p class="text-muted">Tonton highlight pertandingan menarik</p>
                <a href="playlist/view_playlist.php" class="btn btn-success btn-lg w-100">
                    <i class="bi bi-play-circle-fill me-2"></i> Lihat Video
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
