<!DOCTYPE html>
<html lang="id">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta charset="utf-8"/>
  <title>Dashboard - Equogreen</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#4039c9',
            accent:  '#002eff',
          },
          fontFamily: {
            inter: ['Inter', 'sans-serif'],
          }
        }
      }
    }
  </script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; }

    /* Modal overlay */
    #pengumuman-modal {
      display: none;
    }
    #pengumuman-modal.show {
      display: flex;
    }

    /* Modal slide-up animation */
    @keyframes modalSlideUp {
      from { opacity: 0; transform: translateY(24px) scale(0.96); }
      to   { opacity: 1; transform: translateY(0) scale(1); }
    }
    .modal-animate {
      animation: modalSlideUp 0.25s ease-out;
    }
  </style>
</head>
<body class="bg-[#eef3ff] min-h-screen flex">

  <!-- ===== SIDEBAR ===== -->
  <aside class="w-[280px] min-h-screen bg-white flex-shrink-0 flex flex-col shadow-md">

    <!-- Logo -->
    <div class="flex items-center gap-3 px-6 pt-8 pb-6 border-b border-gray-100">
      <img src="gambar/logo.png" alt="Logo Equogreen" class="w-14 h-14 rounded-full object-cover"/>
      <span class="text-2xl font-bold text-gray-800">Equogreen</span>
    </div>

    <!-- Nav Menu -->
    <nav class="flex-1 px-4 py-6 flex flex-col gap-1">

      <!-- Dashboard -->
      <a href="dashboard.html" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 font-bold text-[17px] bg-[#eef3ff] text-primary transition-all duration-200 hover:bg-primary hover:text-white group">
        <img src="gambar/dashboard layout.png" alt="Dashboard" class="w-7 h-7 object-contain group-hover:brightness-0 group-hover:invert"/>
        Dashboard
      </a>
      <div class="border-b border-gray-100 my-1"></div>

      <!-- Periksa Barang -->
      <a href="menu-periksa-barang.html" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-600 font-bold text-[17px] transition-all duration-200 hover:bg-primary hover:text-white group">
        <img src="gambar/search database.png" alt="Periksa Barang" class="w-7 h-7 object-contain group-hover:brightness-0 group-hover:invert"/>
        Periksa Barang
      </a>
      <div class="border-b border-gray-100 my-1"></div>

      <!-- Kelola Notifikasi -->
      <a href="menu-kelola-notifikasi-procurement.html" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-600 font-bold text-[17px] transition-all duration-200 hover:bg-primary hover:text-white group">
        <img src="gambar/Add Reminder.png" alt="Periksa Barang" class="w-7 h-7 object-contain group-hover:brightness-0 group-hover:invert"/>
        Kelola Notifikasi
      </a>
      <div class="border-b border-gray-100 my-1"></div>
      <!-- Validasi Vendor -->
      <a href="validasi-vendor.html" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-600 font-bold text-[17px] transition-all duration-200 hover:bg-primary hover:text-white group">
        <img src="gambar/validasi.png" alt="Validasi Vendor" class="w-7 h-7 object-contain group-hover:brightness-0 group-hover:invert"/>
        Validasi Vendor
      </a>
      <div class="border-b border-gray-100 my-1"></div>

      <!-- Pengaturan -->
      <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-600 font-bold text-[17px] transition-all duration-200 hover:bg-primary hover:text-white group">
        <img src="gambar/Settings.png" alt="Pengaturan" class="w-7 h-7 object-contain group-hover:brightness-0 group-hover:invert"/>
        Pengaturan
      </a>

    </nav>

    <!-- Logout -->
    <div class="px-4 pb-8 border-t border-gray-100 pt-4">
      <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-red-500 font-bold text-[17px] transition-all duration-200 hover:bg-red-50 group">
        <img src="gambar/logout.png" alt="Logout" class="w-7 h-7 object-contain"/>
        Logout
      </a>
    </div>
  </aside>

  <!-- ===== MAIN CONTENT ===== -->
  <main class="flex-1 flex flex-col min-w-0 p-6 lg:p-8 gap-6">

    <!-- Top Header -->
    <header class="flex items-center justify-between">
      <div>
        <h1 class="text-3xl lg:text-4xl font-black text-gray-800 tracking-tight" style="font-family:'Futura-Bold',Helvetica,sans-serif;">Dashboard</h1>
        <p class="text-gray-500 text-base mt-1">Halo, ATK Corner! Selamat datang di website Equogreen</p>
      </div>

      <!-- Profile Section -->
      <div class="flex items-center gap-3">
        <!-- Notification Bell -->
        <button class="w-12 h-12 flex items-center justify-center bg-[#f0f5ff] rounded-full border border-gray-200 hover:bg-primary hover:border-primary transition-all duration-200 group">
          <img src="gambar/bell-black.png" alt="Notifikasi" class="w-6 h-6 object-contain group-hover:brightness-0 group-hover:invert"/>
        </button>

        <!-- Profile -->
        <img src="gambar/Profileup.png" alt="Profil" class="w-12 h-12 rounded-full object-cover border-2 border-gray-200 hover:border-primary transition-all duration-200 cursor-pointer"/>
        <div class="hidden md:block w-px h-10 bg-gray-200"></div>
        <span class="hidden md:block font-medium text-gray-700 text-[17px]">Procurement</span>
      </div>
    </header>

    <!-- Announcement Banner (clickable) -->
    <section id="banner-pengumuman" class="bg-[#4039c9] rounded-2xl border border-black px-8 py-6 flex flex-col md:flex-row items-start md:items-center justify-between gap-4 shadow-md cursor-pointer hover:shadow-lg hover:scale-[1.01] active:scale-[0.995] transition-all duration-200">
      <div class="flex-1">
        <p class="text-white/70 text-sm font-bold tracking-widest uppercase mb-1">PENGUMUMAN</p>
        <h2 class="text-white text-xl lg:text-2xl font-bold mb-2">Buat pengumuman untuk vendor</h2>
        <p class="text-white/80 text-sm lg:text-base">Pastikan spesifikasi barang dan tenggat waktu sudah sesuai</p>
      </div>
      <!-- Decorative icon area -->
      <div class="w-20 h-20 bg-[#2d4ddd]/65 rounded-full flex items-center justify-center flex-shrink-0">
        <img src="gambar/pengumuman.png" alt="banner icon" class="w-12 h-12 object-cover rounded-full"/>
      </div>
    </section>

    <!-- Kategori Table Card -->
    <section class="bg-white rounded-[10px] shadow-md p-6 lg:p-8">
      <h2 class="text-xl font-bold text-gray-800 mb-5" style="font-family:'Futura-Bold',Helvetica,sans-serif;">Kategori</h2>

      <div class="overflow-x-auto">
        <table class="w-full border-collapse">
          <thead>
            <tr class="border-b border-gray-100">
              <th class="text-left py-2 px-3 text-sm font-bold text-gray-500 uppercase tracking-wide">Kolom 1</th>
              <th class="text-left py-2 px-3 text-sm font-bold text-gray-500 uppercase tracking-wide">Kolom 2</th>
              <th class="text-left py-2 px-3 text-sm font-bold text-gray-500 uppercase tracking-wide">Kolom 3</th>
              <th class="text-left py-2 px-3 text-sm font-bold text-gray-500 uppercase tracking-wide">Kolom 4</th>
            </tr>
          </thead>
          <tbody>
            <!-- Row 1 -->
            <tr class="group hover:bg-[#eef3ff] transition-colors duration-150">
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
            </tr>
            <!-- Row 2 -->
            <tr class="group hover:bg-[#eef3ff] transition-colors duration-150">
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
            </tr>
            <!-- Row 3 -->
            <tr class="group hover:bg-[#eef3ff] transition-colors duration-150">
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
            </tr>
            <!-- Row 4 -->
            <tr class="group hover:bg-[#eef3ff] transition-colors duration-150">
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
            </tr>
            <!-- Row 5 -->
            <tr class="group hover:bg-[#eef3ff] transition-colors duration-150">
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
            </tr>
            <!-- Row 6 -->
            <tr class="group hover:bg-[#eef3ff] transition-colors duration-150">
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
              <td class="py-2 px-3"><div class="h-9 bg-white group-hover:bg-[#e6edff] rounded-[10px] border border-black transition-colors duration-150"></div></td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- Action Buttons -->
    <div class="flex flex-col sm:flex-row gap-4">
      <button class="flex-1 bg-accent text-white font-bold text-lg rounded-2xl py-4 px-6 hover:bg-[#0023cc] active:scale-95 transition-all duration-200 shadow hover:shadow-lg">
        Pengaturan Waktu
      </button>
      <button class="flex-1 bg-accent text-white font-bold text-lg rounded-2xl py-4 px-6 hover:bg-[#0023cc] active:scale-95 transition-all duration-200 shadow hover:shadow-lg">
        Kirim
      </button>
    </div>

  </main>

  <!-- ========== MODAL: Pengumuman ========== -->
  <div id="pengumuman-modal" class="fixed inset-0 z-50 items-center justify-center bg-black/40 backdrop-blur-sm">
    <div class="modal-animate bg-[#eef0f5] rounded-2xl shadow-2xl w-full max-w-2xl mx-4 p-7 flex flex-col gap-5">

      <!-- Header: Title + Action Buttons -->
      <div class="flex items-center justify-between">
        <h2 class="text-2xl font-extrabold text-gray-900" style="font-family:'Futura-Bold',Helvetica,sans-serif;">Pengumuman</h2>
        <div class="flex items-center gap-2">
          <!-- Edit Button -->
          <button id="btn-edit-pengumuman"
            class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg border-2 border-gray-300 bg-white text-gray-700 font-bold text-sm hover:border-primary hover:text-primary transition-all duration-200 shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
            Edit
          </button>
          <!-- Hapus Button -->
          <button id="btn-hapus-pengumuman"
            class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-gray-900 text-white font-bold text-sm hover:bg-gray-700 transition-all duration-200 shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
            Hapus
          </button>
          <!-- Close (X) Button -->
          <button id="close-pengumuman-modal"
            class="w-10 h-10 rounded-lg bg-red-500 text-white flex items-center justify-center hover:bg-red-600 active:scale-90 transition-all duration-200 shadow-sm text-xl font-bold">
            ✕
          </button>
        </div>
      </div>

      <!-- Textarea -->
      <textarea id="pengumuman-text" rows="10" disabled
        class="w-full rounded-xl border border-gray-200 bg-white p-5 text-sm text-gray-700 resize-none outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-200 disabled:opacity-60 disabled:cursor-default placeholder:text-gray-400"
        placeholder="Buatlah pengumuman untuk vendor"></textarea>

    </div>
  </div>

  <!-- ========== TOAST NOTIFICATION ========== -->
  <div id="toast"
    class="fixed bottom-6 right-6 z-[60] bg-primary text-white px-5 py-3 rounded-xl shadow-lg text-sm font-bold opacity-0 pointer-events-none transition-all duration-300 flex items-center gap-2">
    <span id="toast-icon">✓</span>
    <span id="toast-msg">Berhasil!</span>
  </div>

  <script>
    // ---- Elements ----
    const banner = document.getElementById('banner-pengumuman');
    const modal = document.getElementById('pengumuman-modal');
    const closeBtn = document.getElementById('close-pengumuman-modal');
    const editBtn = document.getElementById('btn-edit-pengumuman');
    const hapusBtn = document.getElementById('btn-hapus-pengumuman');
    const textarea = document.getElementById('pengumuman-text');

    // ---- Open Modal ----
    banner.addEventListener('click', () => {
      modal.classList.add('show');
    });

    // ---- Close Modal ----
    closeBtn.addEventListener('click', () => {
      modal.classList.remove('show');
      // Reset edit state when closing
      textarea.disabled = true;
      editBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg> Edit`;
      editBtn.classList.remove('border-primary', 'text-primary');
    });

    // Click overlay to close
    modal.addEventListener('click', (e) => {
      if (e.target === modal) closeBtn.click();
    });

    // ---- Edit / Simpan Toggle ----
    editBtn.addEventListener('click', () => {
      const isEditing = !textarea.disabled;
      if (isEditing) {
        // Save mode
        textarea.disabled = true;
        editBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg> Edit`;
        editBtn.classList.remove('border-primary', 'text-primary');
        showToast('Pengumuman berhasil disimpan!');
      } else {
        // Enter edit mode
        textarea.disabled = false;
        textarea.focus();
        editBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> Simpan`;
        editBtn.classList.add('border-primary', 'text-primary');
      }
    });

    // ---- Hapus ----
    hapusBtn.addEventListener('click', () => {
      if (textarea.value.trim() === '') {
        showToast('Tidak ada pengumuman untuk dihapus.', true);
        return;
      }
      textarea.value = '';
      textarea.disabled = true;
      editBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg> Edit`;
      editBtn.classList.remove('border-primary', 'text-primary');
      showToast('Pengumuman berhasil dihapus!');
    });

    // ---- Toast Helper ----
    function showToast(msg, isError = false) {
      const toast = document.getElementById('toast');
      const toastMsg = document.getElementById('toast-msg');
      const toastIcon = document.getElementById('toast-icon');
      toastMsg.textContent = msg;
      toast.style.background = isError ? '#e53e3e' : '#4039c9';
      toastIcon.textContent = isError ? '!' : '✓';
      toast.style.opacity = '1';
      toast.style.pointerEvents = 'auto';
      setTimeout(() => {
        toast.style.opacity = '0';
        toast.style.pointerEvents = 'none';
      }, 2800);
    }
  </script>

</body>
</html>