<?php
session_start();
include 'config.php';

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $inputCode = trim($_POST['code'] ?? '');

  // Contoh validasi kode sederhana
  $validCodes = ['ETLE2024', 'ADMIN123', 'POLDA2024'];

  if (in_array($inputCode, $validCodes)) {
    $_SESSION['admin_logged_in'] = true;
    $success = 'Kode valid. Anda berhasil login sebagai admin.';
    header('Location: admin.php');
    exit;
  } else {
    $error = 'Kode tidak valid. Silakan coba lagi.';
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Panel Admin - ETLE Dirlantas Polda Sumsel</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #1e3a8a, #2563eb, #22d3ee);
      min-height: 100vh;
      margin: 0;
      display: flex;
      flex-direction: column;
    }
  </style>
</head>
<body class="flex flex-col min-h-screen">
  <nav class="bg-gradient-to-r from-cyan-700 via-blue-800 to-blue-900 text-white p-4 shadow-lg">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-xl font-bold tracking-wider">Panel Admin - Dirlantas Polda Sumsel</h1>
      <div class="space-x-6 text-lg font-semibold">
        <a href="index.php" class="hover:text-yellow-400 transition">Ambil Nomor</a>
        <a href="admin.php" class="hover:text-yellow-400 transition">Admin</a>
        <a href="display.php" class="hover:text-yellow-400 transition">Display</a>
      </div>
    </div>
  </nav>

  <main class="flex-grow container mx-auto p-10">
    <section class="max-w-lg mx-auto bg-white bg-opacity-90 p-10 rounded-3xl shadow-2xl border-4 border-cyan-500">
      <h2 class="text-3xl font-extrabold mb-8 text-cyan-800 text-center tracking-wide">Panel Login Admin</h2>

      <?php if ($error): ?>
        <div class="mb-6 text-red-600 font-semibold bg-red-100 p-3 rounded flex items-center">
          <i class="fas fa-exclamation-triangle mr-2"></i>
          <span><?= htmlspecialchars($error) ?></span>
        </div>
      <?php endif; ?>

      <?php if ($success): ?>
        <div class="mb-6 text-green-700 font-semibold bg-green-100 p-3 rounded flex items-center">
          <i class="fas fa-check-circle mr-2"></i>
          <span><?= htmlspecialchars($success) ?></span>
        </div>
      <?php endif; ?>

      <form method="POST" class="space-y-6" novalidate>
        <div>
          <label for="code" class="block text-cyan-800 font-semibold mb-2">Masukkan Kode Admin:</label>
          <input type="password" id="code" name="code" required maxlength="50" placeholder="Masukkan kode admin" class="w-full px-4 py-3 border border-cyan-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-600 transition" />
        </div>
        <button type="submit" class="w-full bg-cyan-600 hover:bg-cyan-700 text-white font-bold py-4 rounded-full transition shadow-lg shadow-cyan-400/50 flex items-center justify-center space-x-3">
          <i class="fas fa-key text-xl"></i>
          <span>Login</span>
        </button>
      </form>
    </section>
  </main>

  <footer class="bg-gradient-to-r from-cyan-700 via-blue-800 to-blue-900 text-white text-center p-5 mt-10 shadow-inner">
    &copy; <?= date('Y') ?> Dirlantas Polda Sumatera Selatan - Sistem Nomor Antrian ETLE
  </footer>
</body>
</html>
