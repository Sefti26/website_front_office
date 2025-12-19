<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Display Nomor Antrian &amp; Video Informasi - ETLE Dirlantas Polda Sumsel</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #0f172a, #2563eb);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .glow-text {
      text-shadow:
        0 0 6px #22d3ee,
        0 0 12px #22d3ee,
        0 0 18px #22d3ee,
        0 0 30px #06b6d4,
        0 0 60px #06b6d4;
    }
    .pulse {
      animation: pulseGlow 2.5s infinite;
    }
    @keyframes pulseGlow {
      0%, 100% {
        text-shadow:
          0 0 6px #22d3ee,
          0 0 12px #22d3ee,
          0 0 18px #22d3ee,
          0 0 30px #06b6d4,
          0 0 60px #06b6d4;
      }
      50% {
        text-shadow:
          0 0 12px #67e8f9,
          0 0 24px #67e8f9,
          0 0 30px #22d3ee,
          0 0 45px #06b6d4,
          0 0 90px #06b6d4;
      }
    }
    /* Blob animation */
    @keyframes blob {
      0%, 100% {
        transform: translate(0px, 0px) scale(1);
      }
      33% {
        transform: translate(30px, -50px) scale(1.1);
      }
      66% {
        transform: translate(-20px, 20px) scale(0.9);
      }
    }
    .animate-blob {
      animation: blob 7s infinite;
    }
    .animation-delay-2000 {
      animation-delay: 2s;
    }
  </style>
</head>
<body class="flex flex-col min-h-screen">
  <nav class="bg-gradient-to-r from-cyan-700 via-blue-800 to-blue-900 text-white p-5 shadow-lg">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-2xl font-bold tracking-wide">
        Sistem Nomor Antrian ETLE - Dirlantas Polda Sumsel
      </h1>
      <div class="space-x-6 text-lg font-semibold hidden sm:flex">
        <a class="hover:text-yellow-400 transition" href="index.php">Ambil Nomor</a>
        <a class="hover:text-yellow-400 transition" href="admin.php">Admin</a>
        <a class="hover:text-yellow-400 transition" href="display.php">Display</a>
      </div>
    </div>
  </nav>
  <main class="flex-grow container mx-auto px-4 py-12 max-w-7xl">
    <?php
      include 'config.php';
      $currentQuery = mysqli_query($koneksi, "SELECT nomor_antrian FROM antrian WHERE status='Dipanggil' ORDER BY id DESC LIMIT 1");
      $currentData = mysqli_fetch_assoc($currentQuery);
      $nomorTampil = $currentData['nomor_antrian'] ?? '-';
    ?>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
      <!-- Nomor Antrian Display -->
      <section class="bg-gradient-to-br from-cyan-600 to-blue-700 rounded-3xl shadow-2xl p-10 text-center relative overflow-hidden flex flex-col justify-center items-center">
        <div class="absolute -top-20 -right-20 w-72 h-72 bg-cyan-400 rounded-full opacity-30 animate-blob"></div>
        <div class="absolute -bottom-20 -left-20 w-72 h-72 bg-blue-500 rounded-full opacity-30 animate-blob animation-delay-2000"></div>
        <h2 class="text-4xl font-extrabold text-white mb-5 tracking-widest glow-text pulse uppercase drop-shadow-lg">
          Nomor Antrian Saat Ini
        </h2>
        <p class="text-cyan-200 text-base mb-6 max-w-md px-4">
          Mohon perhatikan nomor antrian Anda. Harap bersiap saat nomor Anda dipanggil untuk pelayanan ETLE.
        </p>
        <div aria-atomic="true" aria-live="polite" class="text-8xl font-extrabold text-white tracking-widest drop-shadow-lg select-none glow-text pulse font-mono px-5 py-3 rounded-lg border-8 border-cyan-300 bg-cyan-800/30 w-full max-w-xs truncate">
          <?= htmlspecialchars($nomorTampil) ?>
        </div>
      </section>
      <!-- Video Informasi -->
      <section class="bg-white rounded-3xl shadow-2xl p-6 flex flex-col items-center">
        <h2 class="text-3xl font-extrabold mb-6 text-cyan-800 tracking-wide text-center w-full">
          Informasi Pembayaran ETLE
        </h2>
        <div class="w-full aspect-video rounded-xl overflow-hidden shadow-lg border-4 border-cyan-500">
          <video autoplay controls loop muted class="w-full h-full object-cover">
            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4" />
            Browser Anda tidak mendukung video tag.
          </video>
        </div>
        <p class="mt-6 text-cyan-700 text-center max-w-md px-4">
          Silakan tonton video ini untuk informasi penting mengenai tata cara pembayaran ETLE dan prosedur yang harus diikuti oleh pengunjung.
        </p>
      </section>
    </div>
  </main>
  <footer class="bg-gradient-to-r from-cyan-700 via-blue-800 to-blue-900 text-white text-center p-5 mt-10 shadow-inner">
    © <?= date('Y') ?> Dirlantas Polda Sumatera Selatan - Sistem Nomor Antrian ETLE
  </footer>
</body>
</html>