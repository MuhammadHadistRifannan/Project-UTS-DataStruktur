<?php
session_start();
include '../module/DLLC_2.php'; // Ganti jika class ada di DLLC_1.php

// Inisialisasi playlist
$playlist = new DoubleCircularLinkedList();
$playlist->insert("Highlight_1.mp4");
$playlist->insert("Highlight_2.mp4");
$playlist->insert("Highlight_3.mp4");
$playlist->insert("Highlight_4.mp4");


// Konversi DLLC ke array
$playlistArray = $playlist->toArray();
$total = count($playlistArray);

// Atur index sekarang di session
if (!isset($_SESSION['playlist_index'])) {
    $_SESSION['playlist_index'] = 0;
}

// Navigasi manual
if (isset($_GET['nav'])) {
    if ($_GET['nav'] === 'next') {
        $_SESSION['playlist_index'] = ($_SESSION['playlist_index'] + 1) % $total;
    } elseif ($_GET['nav'] === 'prev') {
        $_SESSION['playlist_index'] = ($_SESSION['playlist_index'] - 1 + $total) % $total;
    }
}

$currentIndex = $_SESSION['playlist_index'];
$currentVideo = $playlistArray[$currentIndex];
echo $currentVideo;
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Playlist Video</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .video-box {
      border: 3px solid #198754;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }
  </style>
</head>
<body class="bg-light">

<div class="container mt-5 text-center">
  <h2>Playlist Highlight Video</h2>

  <video id="videoPlayer" class="video-box mt-4" width="640" height="360" autoplay controls>
    <source src="../video/<?php echo $currentVideo ?>" type="video/mp4">
    Browser Anda tidak mendukung pemutaran video.
  </video>

  <p class="mt-3">Video Saat Ini: <span id="videoTitle"><?= $currentVideo ?></span></p>

  <!-- Navigation Buttons -->
  <div class="d-flex justify-content-center gap-3 mt-3">
    <a href="?nav=prev" class="btn btn-secondary">⬅️ Sebelumnya</a>
    <a href="?nav=next" class="btn btn-primary">Selanjutnya ➡️</a>
  </div>

  <a href="../index.php" class="btn btn-link mt-4">🔙 Kembali ke Menu Utama</a>
</div>

<!-- JavaScript Auto-Next -->
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
