<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cetak Nomor Antrian - ETLE Dirlantas Polda Sumsel</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f0f9ff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .ticket {
      background: white;
      border: 4px solid #06b6d4;
      border-radius: 1rem;
      padding: 2rem 3rem;
      box-shadow: 0 10px 25px rgba(6, 182, 212, 0.3);
      text-align: center;
      width: 320px;
    }
    .ticket h1 {
      font-size: 3rem;
      color: #0891b2;
      margin-bottom: 1rem;
      letter-spacing: 0.2em;
      font-weight: 700;
    }
    .ticket p {
      font-size: 1.25rem;
      color: #0c4a6e;
      margin-bottom: 1.5rem;
      font-weight: 600;
    }
    .ticket small {
      display: block;
      color: #475569;
      margin-top: 2rem;
      font-size: 0.875rem;
    }
    @media print {
      body {
        background: white;
        height: auto;
      }
      .ticket {
        box-shadow: none;
        border: none;
        width: 100%;
        padding: 0;
        margin: 0;
        border-radius: 0;
      }
      button {
        display: none;
      }
    }
  </style>
</head>
<body>
  <?php
    $nomor = $_GET['nomor'] ?? '-';
    $waktu = date('d M Y, H:i:s');
  ?>
  <div class="ticket" role="main" aria-label="Nomor antrian Anda">
    <h1 aria-live="polite" aria-atomic="true"><?= htmlspecialchars($nomor) ?></h1>
    <p>Nomor Antrian Anda</p>
    <p>Silakan tunggu panggilan selanjutnya.</p>
    <small>Dicetak pada: <?= htmlspecialchars($waktu) ?></small>
    <button onclick="window.print()" class="mt-6 bg-cyan-600 hover:bg-cyan-700 text-white font-bold py-3 px-6 rounded-full transition focus:outline-none focus:ring-4 focus:ring-cyan-400">
      <i class="fas fa-print mr-2"></i> Cetak Nomor
    </button>
  </div>
</body>
</html>