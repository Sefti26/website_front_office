<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sistem Nomor Antrian Digital - Tampilan Panggilan ETLE Dirlantas Polda Sumsel</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #0f172a, #2563eb);
      min-height: 100vh;
      margin: 0;
      display: flex;
      flex-direction: column;
      color: #1e293b;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
    nav {
      backdrop-filter: saturate(180%) blur(12px);
      background-color: rgba(14, 165, 233, 0.9);
      box-shadow: 0 4px 15px rgba(14, 165, 233, 0.5);
      z-index: 60;
    }
    nav h1 {
      text-shadow: 0 2px 8px rgba(0,0,0,0.35);
      line-height: 1.2;
    }
    button:focus-visible {
      outline-offset: 3px;
      outline-color: #facc15;
      outline-style: solid;
      outline-width: 3px;
    }
    .btn-primary {
      background: #0ea5e9;
      color: white;
      font-weight: 700;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 4px 15px rgba(14, 165, 233, 0.4);
    }
    .btn-primary:hover, .btn-primary:focus-visible {
      background: #0284c7;
      box-shadow: 0 6px 20px rgba(2, 132, 199, 0.7);
    }
    .btn-success {
      background-color: #22c55e;
      color: white;
      font-weight: 700;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 4px 15px rgba(34, 197, 94, 0.4);
    }
    .btn-success:hover, .btn-success:focus-visible {
      background-color: #16a34a;
      box-shadow: 0 6px 20px rgba(22, 163, 74, 0.7);
    }
    .btn-gray {
      background-color: #6b7280;
      color: white;
      font-weight: 700;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 4px 15px rgba(107, 114, 128, 0.4);
    }
    .btn-gray:hover, .btn-gray:focus-visible {
      background-color: #4b5563;
      box-shadow: 0 6px 20px rgba(75, 85, 99, 0.7);
    }
    .btn-danger {
      background-color: #ef4444;
      color: white;
      font-weight: 700;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 4px 15px rgba(239, 68, 68, 0.4);
    }
    .btn-danger:hover, .btn-danger:focus-visible {
      background-color: #b91c1c;
      box-shadow: 0 6px 20px rgba(185, 28, 28, 0.7);
    }
    .text-glow {
      color: #0ea5e9;
      text-shadow:
        0 0 10px #38bdf8,
        0 0 20px #38bdf8,
        0 0 30px #0ea5e9,
        0 0 45px #0284c7;
    }
    .shadow-glow {
      box-shadow:
        0 0 15px #38bdf8,
        0 0 35px #0ea5e9;
    }
    .display-container {
      background: rgba(255 255 255 / 0.95);
      border-radius: 2rem;
      box-shadow: 0 0 50px rgba(14, 165, 233, 0.85);
      max-width: 600px;
      margin: 3rem auto;
      padding: 3rem 2.5rem;
      text-align: center;
      user-select: none;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1.8rem;
      position: relative;
      overflow: hidden;
    }
    .display-container::before {
      content: "";
      position: absolute;
      top: -40%;
      left: -40%;
      width: 180%;
      height: 180%;
      background: radial-gradient(circle at center, #0ea5e9, transparent 70%);
      opacity: 0.15;
      filter: blur(80px);
      pointer-events: none;
      z-index: 0;
      animation: pulseGlow 6s ease-in-out infinite;
    }
    @keyframes pulseGlow {
      0%, 100% {opacity: 0.15;}
      50% {opacity: 0.3;}
    }
    .display-title {
      font-size: 2rem;
      font-weight: 900;
      color: #0c4a6e;
      text-transform: uppercase;
      letter-spacing: 0.18em;
      text-shadow: 0 0 12px #0ea5e9;
      width: 100%;
      text-align: center;
      z-index: 1;
    }
    .display-number-box {
      background: #0284c7;
      border-radius: 1.5rem;
      width: 100%;
      max-width: 480px;
      padding: 2rem 0;
      box-shadow:
        0 0 30px #0ea5e9,
        0 0 60px #38bdf8,
        0 0 90px #0284c7;
      user-select: text;
      position: relative;
      z-index: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      border: 6px solid #0ea5e9;
      box-sizing: border-box;
    }
    .display-number {
      font-size: 7rem;
      font-weight: 900;
      color: white;
      letter-spacing: 0.35em;
      line-height: 1;
      margin: 0;
      user-select: text;
      text-align: center;
      font-family: 'Poppins', sans-serif;
      text-shadow:
        0 0 10px #38bdf8,
        0 0 20px #0ea5e9,
        0 0 30px #0284c7;
    }
    .display-subtitle {
      font-size: 1.1rem;
      font-weight: 700;
      color: #075985;
      text-shadow: 0 0 8px #38bdf8;
      width: 100%;
      max-width: 480px;
      text-align: center;
      z-index: 1;
    }
    .btn-glow {
      background: #0ea5e9;
      color: white;
      font-weight: 700;
      padding: 0.75rem 1.5rem;
      border-radius: 9999px;
      box-shadow:
        0 0 8px #38bdf8,
        0 0 20px #0ea5e9;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }
    .btn-glow:hover, .btn-glow:focus-visible {
      background: #0284c7;
      box-shadow:
        0 0 12px #38bdf8,
        0 0 30px #0ea5e9;
    }
    .btn-glow:active {
      background: #0369a1;
      box-shadow: none;
    }
    .btn-icon {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
    }
    .btn-icon i {
      font-size: 1.25rem;
    }
    .input-glow {
      border: 2px solid #0ea5e9;
      box-shadow:
        0 0 8px #38bdf8,
        0 0 20px #0ea5e9;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .input-glow:focus {
      border-color: #0284c7;
      box-shadow:
        0 0 12px #38bdf8,
        0 0 30px #0ea5e9;
      outline: none;
    }
    table {
      border-collapse: separate;
      border-spacing: 0 0.5rem;
    }
    th {
      background-color: #0ea5e9;
      color: white;
      font-weight: 700;
      padding: 1rem 1.5rem;
      text-align: center;
      border-radius: 0.75rem;
      box-shadow: 0 2px 8px rgba(14, 165, 233, 0.6);
      user-select: none;
    }
    td {
      background-color: #e0f2fe;
      padding: 1rem 1.5rem;
      text-align: center;
      font-weight: 600;
      color: #0c4a6e;
      border-radius: 0.75rem;
      box-shadow: 0 1px 6px rgba(14, 165, 233, 0.3);
      vertical-align: middle;
    }
    tbody tr:hover td {
      background-color: #bae6fd;
      color: #0369a1;
      box-shadow: 0 0 12px #0ea5e9;
      cursor: pointer;
      transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
    }
    .status-selesai {
      background-color: #bbf7d0;
      color: #166534;
      font-weight: 700;
      box-shadow: 0 0 10px #22c55e;
    }
    .status-dipanggil {
      background-color: #bfdbfe;
      color: #1e40af;
      font-weight: 700;
      box-shadow: 0 0 10px #3b82f6;
    }
    .status-menunggu {
      background-color: #fef3c7;
      color: #92400e;
      font-weight: 700;
      box-shadow: 0 0 10px #fbbf24;
    }
    .scrollbar-thin::-webkit-scrollbar {
      height: 6px;
      width: 6px;
    }
    .scrollbar-thin::-webkit-scrollbar-thumb {
      background-color: #0ea5e9;
      border-radius: 10px;
    }
    .scrollbar-thin::-webkit-scrollbar-track {
      background-color: #e0f2fe;
      border-radius: 10px;
    }
    @media (max-width: 640px) {
      .display-number {
        font-size: 5.5rem;
        letter-spacing: 0.25em;
      }
      .display-container {
        padding: 2.5rem 1.5rem;
        max-width: 90vw;
      }
      .display-number-box,
      .display-subtitle {
        max-width: 100%;
      }
      nav h1 {
        font-size: 1.75rem;
        max-width: 100%;
      }
      nav div {
        width: 100%;
        justify-content: center;
      }
      table, thead, tbody, th, td, tr {
        display: block;
      }
      thead tr {
        position: absolute;
        top: -9999px;
        left: -9999px;
      }
      tbody tr {
        margin-bottom: 1rem;
        background-color: #e0f2fe;
        border-radius: 1rem;
        box-shadow: 0 1px 6px rgba(14, 165, 233, 0.3);
        padding: 1rem;
      }
      tbody td {
        border: none;
        position: relative;
        padding-left: 50%;
        text-align: left;
        font-weight: 600;
        color: #0c4a6e;
      }
      tbody td::before {
        position: absolute;
        top: 50%;
        left: 1rem;
        width: 45%;
        padding-right: 1rem;
        white-space: nowrap;
        transform: translateY(-50%);
        font-weight: 700;
        color: #0284c7;
      }
      tbody td:nth-of-type(1)::before { content: "Nomor Antrian"; }
      tbody td:nth-of-type(2)::before { content: "Status"; }
      tbody td:nth-of-type(3)::before { content: "Waktu"; }
      tbody td:nth-of-type(4)::before { content: "Aksi"; }
      tbody td > button {
        margin-bottom: 0.5rem;
        width: 100%;
      }
      tbody td > button:last-child {
        margin-bottom: 0;
      }
    }
  </style>
</head>
<body class="flex flex-col min-h-screen bg-gradient-to-br from-sky-900 via-blue-700 to-indigo-900">
  <nav class="p-5 sticky top-0 z-50 flex flex-wrap justify-between items-center shadow-lg rounded-b-3xl">
    <h1 class="text-3xl sm:text-4xl font-extrabold tracking-wide text-white max-w-xs sm:max-w-full leading-tight">
      Sistem Nomor Antrian Digital <br class="hidden sm:block" />
      <span class="text-yellow-400 drop-shadow-lg">ETLE Dirlantas Polda Sumsel</span>
    </h1>
    <div class="flex flex-wrap gap-3 text-lg font-semibold mt-4 sm:mt-0 justify-center sm:justify-end w-full sm:w-auto">
      <button id="btnTake" class="btn-primary rounded-lg px-5 py-3 shadow-glow focus:ring-4 focus:ring-yellow-400 btn-icon" aria-label="Ambil Nomor Antrian">
        <i class="fas fa-ticket-alt"></i> Ambil Nomor
      </button>
      <button id="btnAdmin" class="btn-primary rounded-lg px-5 py-3 shadow-glow focus:ring-4 focus:ring-yellow-400 btn-icon" aria-label="Panel Admin">
        <i class="fas fa-user-shield"></i> Admin
      </button>
      <button id="btnDisplay" class="btn-primary rounded-lg px-5 py-3 shadow-glow focus:ring-4 focus:ring-yellow-400 btn-icon" aria-label="Tampilan Panggilan Nomor">
        <i class="fas fa-bullhorn"></i> Tampilan Panggilan
      </button>
      <button id="btnPrint" class="btn-primary rounded-lg px-5 py-3 shadow-glow focus:ring-4 focus:ring-yellow-400 btn-icon" aria-label="Cetak Nomor Antrian">
        <i class="fas fa-print"></i> Cetak
      </button>
    </div>
  </nav>

  <main class="flex-grow container mx-auto p-6 max-w-7xl">
    <div id="appContent" class="min-h-[400px]"></div>
  </main>

  <footer class="bg-gradient-to-r from-cyan-700 via-blue-800 to-blue-900 text-white text-center p-5 mt-10 shadow-inner select-none text-sm sm:text-base font-semibold tracking-wide">
    &copy; <span id="year"></span> Dirlantas Polda Sumatera Selatan - Sistem Nomor Antrian Digital ETLE
  </footer>

  <script>
    document.getElementById('year').textContent = new Date().getFullYear();

    const STORAGE_QUEUE_KEY = 'etle_queue_data';
    const STORAGE_ADMIN_KEY = 'etle_admin_logged_in';

    function loadQueueData() {
      const data = localStorage.getItem(STORAGE_QUEUE_KEY);
      if (data) {
        const parsed = JSON.parse(data);
        parsed.forEach(item => item.time = new Date(item.time));
        return parsed;
      }
      return [
        {id: 1, queue_number: 'A001', status: 'Selesai', time: new Date(Date.now() - 3600*1000)},
        {id: 2, queue_number: 'A002', status: 'Dipanggil', time: new Date(Date.now() - 1800*1000)},
        {id: 3, queue_number: 'A003', status: 'Menunggu', time: new Date()},
      ];
    }

    function saveQueueData(data) {
      localStorage.setItem(STORAGE_QUEUE_KEY, JSON.stringify(data));
    }

    function isAdminLoggedIn() {
      return localStorage.getItem(STORAGE_ADMIN_KEY) === 'true';
    }
    function setAdminLoggedIn(value) {
      localStorage.setItem(STORAGE_ADMIN_KEY, value ? 'true' : 'false');
    }

    let queueData = loadQueueData();
    let lastNumber = queueData.length ? queueData[queueData.length -1].queue_number : null;

    function generateNextNumber(lastNum) {
      const letter = 'A';
      if (!lastNum) return letter + '001';
      const numPart = parseInt(lastNum.slice(1), 10);
      const nextNum = numPart + 1;
      return letter + nextNum.toString().padStart(3, '0');
    }

    function speakNumber(number) {
      if (!('speechSynthesis' in window)) return;
      const synth = window.speechSynthesis;
      let textToSpeak = 'Nomor antrian ';
      for (let char of number) {
        if (char === ' ') continue;
        textToSpeak += char + ' ';
      }
      textToSpeak += ', silakan menuju loket.';
      const utterance = new SpeechSynthesisUtterance(textToSpeak);
      utterance.lang = 'id-ID';
      utterance.rate = 0.9;
      utterance.pitch = 1;
      synth.cancel();
      synth.speak(utterance);
    }

    function renderTake() {
      const html = `
        <section class="max-w-md mx-auto bg-white bg-opacity-90 p-14 rounded-3xl shadow-glow border-4 border-cyan-500 text-center relative overflow-hidden">
          <img src="https://placehold.co/120x120/png?text=Ticket+Icon" alt="Ikon tiket antrian berwarna biru dengan latar belakang putih" class="absolute top-6 right-6 w-20 h-20 opacity-20 select-none pointer-events-none" />
          <h2 class="text-4xl font-extrabold mb-12 text-glow tracking-wide select-none">Ambil Nomor Antrian Anda</h2>
          <button id="takeNumberBtn" class="btn-primary rounded-full px-14 py-6 text-3xl shadow-lg hover:scale-110 transform transition duration-300 ease-in-out btn-icon" aria-label="Ambil Nomor Antrian">
            <i class="fas fa-ticket-alt mr-5"></i> Ambil Nomor
          </button>
        </section>
      `;
      document.getElementById('appContent').innerHTML = html;
      document.getElementById('takeNumberBtn').addEventListener('click', () => {
        const newNumber = generateNextNumber(lastNumber);
        lastNumber = newNumber;
        const newEntry = {id: queueData.length + 1, queue_number: newNumber, status: 'Menunggu', time: new Date()};
        queueData.push(newEntry);
        saveQueueData(queueData);
        renderCalling(newNumber);
      });
    }

    function renderCalling(number) {
      const html = `
        <section class="display-container" role="region" aria-live="polite" aria-atomic="true" aria-label="Nomor antrian yang sedang dipanggil">
          <h2 class="display-title">Nomor Antrian yang Dipanggil</h2>
          <div class="display-number-box" aria-label="Nomor antrian" style="animation: pulseNumber 2.5s ease-in-out infinite alternate;">
            <p id="displayNumber" class="display-number">${number}</p>
          </div>
          <p class="display-subtitle">Silakan menuju loket jika nomor Anda dipanggil.</p>
        </section>
        <style>
          @keyframes pulseNumber {
            0% { box-shadow: 0 0 30px #0ea5e9, 0 0 60px #38bdf8, 0 0 90px #0284c7; }
            100% { box-shadow: 0 0 50px #0ea5e9, 0 0 100px #38bdf8, 0 0 140px #0284c7; }
          }
        </style>
      `;
      document.getElementById('appContent').innerHTML = html;

      speakNumber(number);
    }

    function renderAdminLogin(errorMsg = '') {
      const html = `
        <section class="max-w-lg mx-auto bg-white bg-opacity-90 p-14 rounded-3xl shadow-glow border-4 border-cyan-500 relative overflow-hidden">
          <img src="https://placehold.co/100x100/png?text=Admin+Icon" alt="Ikon admin berwarna biru dengan latar belakang putih" class="absolute top-6 left-6 w-16 h-16 opacity-20 select-none pointer-events-none" />
          <h2 class="text-4xl font-extrabold mb-12 text-cyan-800 text-center tracking-wide select-none">Panel Login Admin</h2>
          ${errorMsg ? `<div class="mb-8 text-red-700 font-semibold bg-red-100 p-5 rounded flex items-center justify-center text-center shadow-inner">
            <i class="fas fa-exclamation-triangle mr-4 text-2xl"></i>
            <span>${errorMsg}</span>
          </div>` : ''}
          <form id="adminLoginForm" class="space-y-10" novalidate>
            <div>
              <label for="code" class="block text-cyan-800 font-semibold mb-4 text-lg select-none">Masukkan Kode Admin:</label>
              <input type="password" id="code" name="code" required maxlength="50" placeholder="Masukkan kode admin" class="w-full px-6 py-5 border-2 border-cyan-400 rounded-xl focus:outline-none focus:ring-6 focus:ring-cyan-600 transition text-lg input-glow" aria-describedby="codeHelp" autocomplete="off" />
              <p id="codeHelp" class="text-sm text-cyan-600 mt-2 select-none">Kode admin rahasia untuk akses panel.</p>
            </div>
            <button type="submit" class="btn-primary rounded-full w-full py-6 text-3xl shadow-lg hover:scale-110 transform transition duration-300 ease-in-out flex items-center justify-center space-x-6 btn-icon" aria-label="Login Admin">
              <i class="fas fa-key text-3xl"></i>
              <span>Login</span>
            </button>
          </form>
        </section>
      `;
      document.getElementById('appContent').innerHTML = html;
      document.getElementById('adminLoginForm').addEventListener('submit', e => {
        e.preventDefault();
        const codeInput = document.getElementById('code').value.trim();
        const validCodes = ['ETLE2024', 'ADMIN123', 'POLDA2024'];
        if (validCodes.includes(codeInput)) {
          setAdminLoggedIn(true);
          renderAdminPanel();
        } else {
          renderAdminLogin('Kode tidak valid. Silakan coba lagi.');
        }
      });
    }

    function renderAdminPanel() {
      if (!isAdminLoggedIn()) {
        renderAdminLogin();
        return;
      }
      queueData.sort((a,b) => a.id - b.id);

      const rows = queueData.map(item => {
        const timeStr = item.time.toLocaleString('id-ID', {dateStyle: 'short', timeStyle: 'short'});
        let statusClass = 'status-menunggu';
        if (item.status === 'Dipanggil') statusClass = 'status-dipanggil';
        else if (item.status === 'Selesai') statusClass = 'status-selesai';
        return `
          <tr class="border-b border-transparent hover:shadow-lg transition-shadow duration-300 rounded-lg cursor-default">
            <td class="px-6 py-4 text-center font-mono text-xl select-text">${item.queue_number}</td>
            <td class="px-6 py-4 text-center rounded-lg ${statusClass} select-none">${item.status}</td>
            <td class="px-6 py-4 text-center text-sm text-cyan-900 select-none">${timeStr}</td>
            <td class="px-6 py-4 text-center space-x-3 whitespace-nowrap flex flex-wrap justify-center gap-3">
              <button data-id="${item.id}" data-action="call" class="btn-primary px-5 py-3 rounded-lg text-sm shadow hover:scale-110 transform transition duration-300 ease-in-out btn-icon" aria-label="Panggil nomor ${item.queue_number}">
                <i class="fas fa-bullhorn mr-2"></i> Panggil
              </button>
              <button data-id="${item.id}" data-action="finish" class="btn-success px-5 py-3 rounded-lg text-sm shadow hover:scale-110 transform transition duration-300 ease-in-out btn-icon" aria-label="Selesai nomor ${item.queue_number}">
                <i class="fas fa-check mr-2"></i> Selesai
              </button>
              <button data-id="${item.id}" data-action="reset" class="btn-gray px-5 py-3 rounded-lg text-sm shadow hover:scale-110 transform transition duration-300 ease-in-out btn-icon" aria-label="Reset nomor ${item.queue_number}">
                <i class="fas fa-undo mr-2"></i> Reset
              </button>
            </td>
          </tr>
        `;
      }).join('');

      const html = `
        <section class="max-w-6xl mx-auto bg-white bg-opacity-95 p-12 rounded-3xl shadow-glow border-4 border-cyan-500 relative overflow-hidden">
          <img src="https://placehold.co/140x140/png?text=Admin+Panel" alt="Ilustrasi panel admin berwarna biru dengan latar belakang putih" class="absolute top-6 right-6 w-28 h-28 opacity-10 select-none pointer-events-none" />
          <div class="flex justify-between items-center mb-10 flex-wrap gap-6">
            <h2 class="text-4xl font-extrabold text-cyan-800 tracking-wide select-none">Panel Admin - Kelola Antrian</h2>
            <button id="btnLogout" class="btn-danger px-8 py-4 rounded-full font-semibold shadow hover:scale-110 transform transition duration-300 ease-in-out flex items-center space-x-4 btn-icon" aria-label="Logout admin">
              <i class="fas fa-sign-out-alt text-xl"></i><span>Logout</span>
            </button>
          </div>
          <div class="overflow-x-auto max-h-[520px] rounded-xl border border-cyan-300 shadow-inner scrollbar-thin">
            <table class="w-full table-auto border-collapse border border-cyan-300 text-cyan-900">
              <thead>
                <tr>
                  <th class="px-6 py-5 border border-cyan-400 text-xl select-none">Nomor Antrian</th>
                  <th class="px-6 py-5 border border-cyan-400 text-xl select-none">Status</th>
                  <th class="px-6 py-5 border border-cyan-400 text-xl select-none">Waktu</th>
                  <th class="px-6 py-5 border border-cyan-400 text-xl select-none">Aksi</th>
                </tr>
              </thead>
              <tbody>
                ${rows}
              </tbody>
            </table>
          </div>
        </section>
      `;
      document.getElementById('appContent').innerHTML = html;

      document.querySelectorAll('button[data-action]').forEach(button => {
        button.addEventListener('click', () => {
          const id = parseInt(button.getAttribute('data-id'));
          const action = button.getAttribute('data-action');
          const item = queueData.find(q => q.id === id);
          if (!item) return;

          if (action === 'call') {
            queueData.forEach(q => {
              if (q.status === 'Dipanggil') q.status = 'Menunggu';
            });
            item.status = 'Dipanggil';
            speakNumber(item.queue_number);
          } else if (action === 'finish') {
            if (item.status === 'Dipanggil' || item.status === 'Menunggu') {
              item.status = 'Selesai';
            }
          } else if (action === 'reset') {
            item.status = 'Menunggu';
          }
          saveQueueData(queueData);
          renderAdminPanel();
        });
      });

      document.getElementById('btnLogout').addEventListener('click', () => {
        setAdminLoggedIn(false);
        renderTake();
      });
    }

    // INITIAL RENDER
    if (isAdminLoggedIn()) {
      renderAdminPanel();
    } else {
      renderTake();
    }

    // NAVIGATION BUTTONS
    document.getElementById('btnTake').addEventListener('click', () => {
      renderTake();
    });
    document.getElementById('btnAdmin').addEventListener('click', () => {
      if (isAdminLoggedIn()) {
        renderAdminPanel();
      } else {
        renderAdminLogin();
      }
    });
    document.getElementById('btnDisplay').addEventListener('click', () => {
      renderCallingDisplay();
    });
    document.getElementById('btnPrint').addEventListener('click', () => {
      renderPrint();
    });

    // Updated display render to align text inside box with subtle animation
    function renderCallingDisplay() {
      const callingItem = queueData.find(q => q.status === 'Dipanggil');
      const displayNumber = callingItem ? callingItem.queue_number : 'Tidak Ada';

      const html = `
        <section class="display-container" role="region" aria-live="polite" aria-atomic="true" aria-label="Nomor antrian yang sedang dipanggil">
          <h2 class="display-title">Nomor Antrian yang Dipanggil</h2>
          <div class="display-number-box" aria-label="Nomor antrian" style="animation: pulseNumber 2.5s ease-in-out infinite alternate;">
            <p id="displayNumber" class="display-number">${displayNumber}</p>
          </div>
          <p class="display-subtitle">Silakan menuju loket jika nomor Anda dipanggil.</p>
        </section>
        <style>
          @keyframes pulseNumber {
            0% { box-shadow: 0 0 30px #0ea5e9, 0 0 60px #38bdf8, 0 0 90px #0284c7; }
            100% { box-shadow: 0 0 50px #0ea5e9, 0 0 100px #38bdf8, 0 0 140px #0284c7; }
          }
        </style>
      `;
      document.getElementById('appContent').innerHTML = html;
    }

    // Print view with smaller number, no "Print Queue" image, elegant glowing style and print button retained
    function renderPrint() {
      if (queueData.length === 0) {
        document.getElementById('appContent').innerHTML = `
          <section class="max-w-xs mx-auto bg-white bg-opacity-90 p-10 rounded-3xl shadow-glow border-4 border-cyan-500 text-center relative overflow-hidden">
            <img src="https://placehold.co/100x100/png?text=No+Queue" alt="Ilustrasi tanda tidak ada nomor antrian dengan latar belakang putih" class="absolute top-6 right-6 w-20 h-20 opacity-20 select-none pointer-events-none" />
            <h2 class="text-3xl font-extrabold mb-8 text-cyan-800 tracking-wide select-none">Cetak Nomor Antrian</h2>
            <p class="text-base text-gray-700 select-none">Tidak ada nomor antrian untuk dicetak.</p>
            <button id="btnPrintBack" class="btn-gray mt-8 px-6 py-3 rounded-full font-semibold shadow hover:scale-110 transform transition duration-300 ease-in-out flex items-center justify-center space-x-3 btn-icon" aria-label="Kembali ke tampilan utama">
              <i class="fas fa-arrow-left"></i> <span>Kembali</span>
            </button>
          </section>
        `;
        document.getElementById('btnPrintBack').addEventListener('click', () => {
          if (isAdminLoggedIn()) {
            renderAdminPanel();
          } else {
            renderTake();
          }
        });
        return;
      }

      let currentIndex = 0;

      function renderSinglePrint(index) {
        const item = queueData[index];
        const formattedTime = item.time.toLocaleString('id-ID', {dateStyle: 'medium', timeStyle: 'short'});
        const html = `
          <section class="max-w-3xl mx-auto bg-gradient-to-tr from-cyan-500 via-blue-600 to-indigo-700 p-12 rounded-3xl shadow-2xl relative overflow-hidden text-white flex flex-col items-center animate-fadeIn">
            <div class="w-full max-w-sm bg-white bg-opacity-20 rounded-3xl p-10 flex flex-col items-center shadow-lg backdrop-blur-md border border-white border-opacity-30">
              <p class="print-number select-text text-white m-0 text-[3rem] font-extrabold tracking-widest drop-shadow-xl">${item.queue_number}</p>
              <p class="print-status select-none text-white mt-1 mb-3 text-lg font-semibold tracking-wide drop-shadow-lg">${item.status}</p>
              <p class="text-white text-xs font-semibold tracking-wide mb-6 drop-shadow-lg uppercase">Waktu: ${formattedTime}</p>
            </div>
            <div class="flex justify-center gap-6 w-full max-w-3xl flex-wrap mt-10">
              <button id="btnPrev" class="btn-gray px-8 py-3 rounded-full font-semibold shadow hover:scale-110 transform transition duration-300 ease-in-out flex items-center space-x-3 btn-icon" aria-label="Nomor sebelumnya" ${index === 0 ? 'disabled' : ''}>
                <i class="fas fa-arrow-left"></i><span class="text-base">Sebelumnya</span>
              </button>
              <button id="btnNext" class="btn-gray px-8 py-3 rounded-full font-semibold shadow hover:scale-110 transform transition duration-300 ease-in-out flex items-center space-x-3 btn-icon" aria-label="Nomor berikutnya" ${index === queueData.length - 1 ? 'disabled' : ''}>
                <span class="text-base">Berikutnya</span><i class="fas fa-arrow-right"></i>
              </button>
              <button id="btnPrintPage" class="btn-primary px-12 py-4 rounded-full font-semibold shadow hover:scale-110 transform transition duration-300 ease-in-out flex items-center space-x-4 btn-icon" aria-label="Cetak halaman">
                <i class="fas fa-print text-xl"></i><span class="text-lg">Cetak</span>
              </button>
              <button id="btnPrintBack" class="btn-gray px-10 py-3 rounded-full font-semibold shadow hover:scale-110 transform transition duration-300 ease-in-out flex items-center justify-center space-x-3 btn-icon" aria-label="Kembali ke tampilan utama">
                <i class="fas fa-arrow-left"></i><span class="text-base">Kembali</span>
              </button>
            </div>
          </section>
          <style>
            @keyframes fadeIn {
              from {opacity: 0; transform: translateY(10px);}
              to {opacity: 1; transform: translateY(0);}
            }
            .animate-fadeIn {
              animation: fadeIn 0.6s ease forwards;
            }
            button:disabled {
              opacity: 0.5;
              cursor: not-allowed;
              box-shadow: none !important;
              transform: none !important;
            }
          </style>
        `;
        document.getElementById('appContent').innerHTML = html;

        document.getElementById('btnPrev').addEventListener('click', () => {
          if (currentIndex > 0) {
            currentIndex--;
            renderSinglePrint(currentIndex);
          }
        });

        document.getElementById('btnNext').addEventListener('click', () => {
          if (currentIndex < queueData.length - 1) {
            currentIndex++;
            renderSinglePrint(currentIndex);
          }
        });

        document.getElementById('btnPrintPage').addEventListener('click', () => {
          // Prepare print content with smaller number font and glowing style, no "Print Queue" image
          const printContent = `
            <div id="printArea" style="
              padding: 0; margin: 0; box-sizing: border-box;
              width: 100vw; height: 100vh;
              display: flex;
              justify-content: center;
              align-items: center;
              font-family: 'Poppins', sans-serif;
              background: white;
              color: #0c4a6e;
            ">
              <div style="
                border: 10px double #0ea5e9;
                border-radius: 2rem;
                box-sizing: border-box;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 2rem 3rem;
                width: 40vw;
                height: 40vh;
                text-align: center;
                background: linear-gradient(135deg, #e0f2fe 0%, #bae6fd 100%);
                box-shadow:
                  0 0 40px #0ea5e9,
                  inset 0 0 30px #38bdf8;
              ">
                <p style="
                  font-size: 3.5rem;
                  font-weight: 900;
                  letter-spacing: 0.5em;
                  margin: 0 0 1.5rem 0;
                  user-select: text;
                  align-self: center;
                  color: #0369a1;
                  text-shadow:
                    0 0 15px #0ea5e9,
                    0 0 30px #38bdf8;
                ">${item.queue_number}</p>
                <p style="
                  font-size: 1.6rem;
                  font-weight: 700;
                  margin: 0;
                  color: #075985;
                  user-select: none;
                  text-shadow: 0 0 10px #0ea5e9;
                ">${item.status}</p>
                <p style="
                  font-size: 1rem;
                  font-weight: 600;
                  margin-top: 1rem;
                  color: #0c4a6e;
                  user-select: none;
                ">Waktu: ${formattedTime}</p>
              </div>
            </div>
          `;
          const originalContent = document.body.innerHTML;
          document.body.innerHTML = printContent;
          window.print();
          document.body.innerHTML = originalContent;
          location.reload();
        });

        document.getElementById('btnPrintBack').addEventListener('click', () => {
          if (isAdminLoggedIn()) {
            renderAdminPanel();
          } else {
            renderTake();
          }
        });
      }

      renderSinglePrint(currentIndex);
    }
  </script>
</body>
</html>