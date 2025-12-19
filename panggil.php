<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Nomor Antrian Anda - ETLE Dirlantas Polda Sumsel</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-gradient-to-r from-blue-900 via-blue-700 to-cyan-600 min-h-screen flex flex-col">
  <nav class="bg-gradient-to-r from-cyan-700 via-blue-800 to-blue-900 text-white p-4 shadow-lg">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-xl font-bold tracking-wider">Sistem Nomor Antrian ETLE - Dirlantas Polda Sumsel</h1>
      <div class="space-x-6 text-lg font-semibold">
        <a href="index.php" class="hover:text-yellow-400 transition">Ambil Nomor</a>
        <a href="admin.php" class="hover:text-yellow-400 transition">Admin</a>
        <a href="display.php" class="hover:text-yellow-400 transition">Display</a>
      </div>
    </div>
  </nav>

  <main class="flex-grow container mx-auto p-10">
    <?php
      $nomor = $_GET['nomor'] ?? '-';
    ?>
    <section class="max-w-md mx-auto bg-white bg-opacity-90 p-16 rounded-3xl shadow-2xl border-4 border-cyan-500 text-center select-none">
      <h2 class="text-4xl font-extrabold mb-10 text-cyan-800 tracking-wide">Nomor Antrian Anda</h2>
      <div aria-live="polite" aria-atomic="true" class="text-9xl font-extrabold text-cyan-700 tracking-widest drop-shadow-lg mb-8">
        <?= htmlspecialchars($nomor) ?>
      </div>
      <p class="text-cyan-900 text-lg font-semibold mb-10">Silakan tunggu panggilan selanjutnya.</p>
      <button onclick="window.location.href='index.php'" class="bg-cyan-600 hover:bg-cyan-700 text-white font-bold py-4 px-10 rounded-full transition shadow-lg shadow-cyan-400/50 inline-flex items-center justify-center space-x-3">
        <i class="fas fa-ticket-alt text-xl"></i>
        <span>Ambil Nomor Lagi</span>
      </button>
    </section>
  </main>

  <footer class="bg-gradient-to-r from-cyan-700 via-blue-800 to-blue-900 text-white text-center p-5 mt-10 shadow-inner">
    &copy; <?= date('Y') ?> Dirlantas Polda Sumatera Selatan - Sistem Nomor Antrian ETLE
  </footer>
</body>
</html>