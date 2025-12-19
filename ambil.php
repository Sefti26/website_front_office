<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Nomor Antrian ETLE</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #e0f2f1, #ffffff);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      padding: 1rem;
    }
    .nomor-container {
      background: white;
      padding: 3rem 4rem;
      border-radius: 2rem;
      box-shadow: 0 20px 40px rgba(0, 128, 0, 0.2);
      text-align: center;
      max-width: 400px;
      width: 100%;
    }
    .title {
      font-size: 1.5rem;
      font-weight: 700;
      color: #065f46; /* green-800 */
      margin-bottom: 1.5rem;
    }
    .nomor {
      font-size: 6rem;
      font-weight: 900;
      color: #047857; /* green-600 */
      letter-spacing: 0.2em;
      margin-bottom: 2rem;
      text-shadow: 2px 2px 6px rgba(4, 120, 87, 0.4);
    }
    .info {
      font-size: 1rem;
      color: #065f46;
      margin-bottom: 2rem;
    }
  </style>
  <script>
    window.onload = function () {
      window.print();
      setTimeout(() => {
        window.location.href = "index.php";
      }, 1500);
    };
  </script>
</head>
<body>
<?php
include 'config.php';

// Ambil nomor terakhir
$query = mysqli_query($koneksi, "SELECT nomor_antrian FROM antrian ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_array($query);

if ($data) {
    $last_number = intval(substr($data['nomor_antrian'], 1));
    $new_number = $last_number + 1;
} else {
    $new_number = 1;
}

// Format: A001, A002, dst
$kode_huruf = "A";
$nomor_baru = $kode_huruf . str_pad($new_number, 3, "0", STR_PAD_LEFT);

// Simpan ke database
mysqli_query($koneksi, "INSERT INTO antrian (nomor_antrian, status, waktu) VALUES ('$nomor_baru', 'Menunggu', NOW())");
?><html lang="id">
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
    <section class="max-w-md mx-auto bg-white bg-opacity-90 p-12 rounded-3xl shadow-2xl border-4 border-cyan-500 text-center select-none">
      <h2 class="text-3xl font-extrabold mb-8 text-cyan-800 tracking-wide">Ambil Nomor Antrian Anda</h2>
      <form method="POST" action="proses_ambil.php">
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
  <div class="nomor-container" role="main" aria-label="Nomor Antrian ETLE">
    <h1 class="title">Nomor Antrian Anda</h1>
    <div class="nomor" aria-live="polite" aria-atomic="true"><?= htmlspecialchars($nomor_baru) ?></div>
    <p class="info">Silakan tunggu panggilan selanjutnya.</p>
  </div>
</body>
</html>