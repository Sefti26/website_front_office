<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Ambil Nomor Antrian - ETLE Dirlantas Polda Sumsel</title>
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
      include 'config.php';

      // Fungsi generate nomor antrian berikutnya
      function generateNextNumber($lastNumber) {
        $letter = 'A';
        if ($lastNumber) {
          $lastNum = intval(substr($lastNumber, 1));
          $nextNum = $lastNum + 1;
        } else {
          $nextNum = 1;
        }
        return $letter . str_pad($nextNum, 3, '0', STR_PAD_LEFT);
      }

      // Ambil nomor terakhir dari DB
      $query = mysqli_query($koneksi, "SELECT nomor_antrian FROM antrian ORDER BY id DESC LIMIT 1");
      $data = mysqli_fetch_assoc($query);
      $lastNumber = $data['nomor_antrian'] ?? null;

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $newNumber = generateNextNumber($lastNumber);
        mysqli_query($koneksi, "INSERT INTO antrian (nomor_antrian, status, waktu) VALUES ('$newNumber', 'Menunggu', NOW())");
        header("Location: panggil.php?nomor=$newNumber");
        exit;
      }
    ?>
    <section class="max-w-md mx-auto bg-white bg-opacity-90 p-12 rounded-3xl shadow-2xl border-4 border-cyan-500 text-center select-none">
      <h2 class="text-3xl font-extrabold mb-8 text-cyan-800 tracking-wide">Ambil Nomor Antrian Anda</h2>
      <form method="POST">
        <button type="submit" class="bg-cyan-600 hover:bg-cyan-700 text-white font-bold py-4 px-10 rounded-full w-full transition shadow-lg shadow-cyan-400/50 inline-flex items-center justify-center space-x-3">
          <i class="fas fa-ticket-alt text-xl"></i>
          <span>Ambil Nomor</span>
        </button>
      </form>
    </section>
  </main>

  <footer class="bg-gradient-to-r from-cyan-700 via-blue-800 to-blue-900 text-white text-center p-5 mt-10 shadow-inner">
    &copy; <?= date('Y') ?> Dirlantas Polda Sumatera Selatan - Sistem Nomor Antrian ETLE
  </footer>
</body>
</html>