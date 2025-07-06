<?php
session_start();
include '../module/DLLC_2.php';

// Inisialisasi playlist
$playlist = new DoubleCircularLinkedList();
$playlist->insert("Highlight_1.mp4");
$playlist->insert("Highlight_2.mp4");
$playlist->insert("Highlight_3.mp4");
$playlist->insert("Highlight_4.mp4");

// Konversi DLLC ke array
$playlistArray = $playlist->toArray();
$total = count($playlistArray);

// Atur index
if (!isset($_SESSION['playlist_index'])) {
    $_SESSION['playlist_index'] = 0;
}
if (isset($_GET['nav'])) {
    if ($_GET['nav'] === 'next') {
        $_SESSION['playlist_index'] = ($_SESSION['playlist_index'] + 1) % $total;
    } elseif ($_GET['nav'] === 'prev') {
        $_SESSION['playlist_index'] = ($_SESSION['playlist_index'] - 1 + $total) % $total;
    }
}

$currentIndex = $_SESSION['playlist_index'];
$currentVideo = $playlistArray[$currentIndex];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Playlist Video Highlight</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(to right, #e0eafc, #cfdef3);
      font-family: 'Segoe UI', sans-serif;
    }
    .video-box {
      border: 4px solid #0d6efd;
      border-radius: 14px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.15);
      transition: all 0.3s ease-in-out;
    }
    .video-box:hover {
      transform: scale(1.02);
    }
    .btn {
      font-size: 1rem;
    }
  </style>
</head>
<body>

<div class="container text-center py-5">
  <h1 class="mb-4 fw-bold"><i class="bi bi-film"></i> Playlist Highlight</h1>

  <video id="videoPlayer" class="video-box" width="720" height="405" autoplay controls>
    <source src="../video/<?= htmlspecialchars($currentVideo) ?>" type="video/mp4">
    Browser Anda tidak mendukung pemutaran video.
  </video>

  <p class="mt-3 fs-5">🎥 Sedang diputar: <strong id="videoTitle"><?= htmlspecialchars($currentVideo) ?></strong></p>

  <!-- Manual Navigation -->
  <div class="d-flex justify-content-center gap-3 mt-3">
    <a href="?nav=prev" class="btn btn-outline-secondary">
      <i class="bi bi-skip-backward-fill"></i> Sebelumnya
    </a>
    <a href="?nav=next" class="btn btn-outline-primary">
      Selanjutnya <i class="bi bi-skip-forward-fill"></i>
    </a>
  </div>

  <div class="mt-4">
    <a href="../index.php" class="btn btn-link">🔙 Kembali ke Menu Utama</a>
  </div>
</div>

<script>
  const playlist = <?= json_encode($playlistArray) ?>;
  let currentIndex = <?= $currentIndex ?>;

  const video = document.getElementById("videoPlayer");
  const title = document.getElementById("videoTitle");

  video.removeAttribute("loop");

  video.addEventListener("ended", function () {
    currentIndex = (currentIndex + 1) % playlist.length;

    const nextVideo = playlist[currentIndex];
    video.src = "../video/" + nextVideo;
    title.textContent = nextVideo;
    video.play();
  });
</script>

</body>
</html>
