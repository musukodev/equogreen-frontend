<!DOCTYPE html>
<html lang="id">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="utf-8" />
  <title>Kelola Notifikasi - Equogreen</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              bg: '#f1f5fa',
              /* Main Content Background, light bluish gray */
            }
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
          }
        }
      }
    }
  </script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }

    /* Profile modal */
    #profile-modal {
      display: none;
    }

    #profile-modal.show {
      display: flex;
    }

    @keyframes modalSlideUp {
      from {
        opacity: 0;
        transform: translateY(24px) scale(0.96);
      }

      to {
        opacity: 1;
        transform: translateY(0) scale(1);
      }
    }

    .modal-animate {
      animation: modalSlideUp 0.25s ease-out;
    }
  </style>
</head>

<body class="flex h-screen overflow-hidden antialiased text-gray-800 bg-brand-bg">


  <!-- ===== SIDEBAR (sama dengan dashboard) ===== -->
  <aside class="hidden lg:flex w-64 bg-white flex-col flex-shrink-0 h-full shadow-[2px_0_10px_rgba(0,0,0,0.02)] z-10">
    <div class="h-28 flex items-center px-6 mt-2">
      <!-- Logo -->
      <img src="gambar/logo2.png" alt="Equogreen Logo">
    </div>

    <div class="px-8 mt-4">
      <p class="text-sm text-gray-400 font-medium mb-4">Overview</p>
      <nav class="flex flex-col gap-5">
        <div>
          <a href="#" class="flex items-center gap-3 text-gray-600 font-bold mb-2">
            <i class="fa-solid fa-border-all text-[24px]"></i>
            <span class="text-[18px]">Dashboard</span>
          </a>
          <div class="h-[2px] bg-gray-300 w-[140px]"></div>
        </div>
        <div>
          <a href="/batch_barang" class="flex items-center gap-3 text-black font-bold mb-2">
            <i class="fa-solid fa-database text-[24px]"></i>
            <span class="text-[18px]">Periksa Barang</span>
          </a>
          <div class="h-[2px] bg-gray-400 w-[150px]"></div>
        </div>
        <div>
          <a href="/notifikasi" class="flex items-center gap-3 text-gray-600 font-bold mb-2">
            <div class="relative">
              <i class="fa-regular fa-bell text-[24px]"></i>
              <i
                class="fa-solid fa-circle-plus text-[12px] bg-white rounded-full absolute -bottom-1 -right-1 text-black"></i>
            </div>
            <span class="text-[18px]">Kelola Notifikasi</span>
          </a>
          <div class="h-[2px] bg-gray-300 w-[180px]"></div>
        </div>
        <div class="w-full">
          <a href="/validasi-vendor" class="flex items-center gap-3 text-[#1f2937] font-bold mb-[10px] hover:text-black transition">
            <i class="ph-bold ph-check-circle text-[26px] -ml-0.5"></i>
            <span class="text-[17px] tracking-tight">Validasi Vendor</span>
          </a>
          <div class="h-[2px] bg-[#d1d5db] w-full max-w-[155px]"></div>
        </div>
      </nav>
    </div>

    <div class="px-8 mt-auto mb-10">
      <p class="text-sm text-gray-400 font-medium mb-4">Pengaturan</p>
      <nav class="flex flex-col gap-5">
        <a href="#" class="flex items-center gap-3 text-gray-600 font-bold">
          <i class="fa-solid fa-gear text-[20px]"></i>
          <span class="text-[17px]">Pengaturan</span>
        </a>
        <a href="#" class="flex items-center gap-3 text-red-500 font-bold">
          <i class="fa-solid fa-arrow-right-from-bracket text-[20px]"></i>
          <span class="text-[17px]">Logout</span>
        </a>
      </nav>
    </div>
  </aside>

  <!-- ===== MAIN CONTENT ===== -->
  <main class="flex-1 flex flex-col min-w-0 p-6 lg:p-8 gap-6 overflow-y-auto">

    <!-- Top Header -->
    <header class="flex items-center justify-between">
      <div class="flex items-center gap-4">
        <!-- Back Button -->
        <a href="dashboard.html" class="w-10 h-10 flex items-center justify-center rounded-full bg-white border border-gray-200 text-gray-500 hover:bg-primary hover:text-white hover:border-primary transition-all duration-200 shadow-sm">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
          </svg>
        </a>
        <div>
          <h1 class="text-3xl lg:text-4xl font-black text-gray-800 tracking-tight" style="font-family:'Futura-Bold',Helvetica,sans-serif;">Kelola Notifikasi</h1>
        </div>
      </div>

      <!-- Profile Section -->
      <div class="flex items-center gap-3">
        <button class="w-12 h-12 flex items-center justify-center bg-[#f0f5ff] rounded-full border border-gray-200 hover:bg-primary hover:border-primary transition-all duration-200 group">
          <img src="gambar/bell-black.png" alt="Notifikasi" class="w-6 h-6 object-contain group-hover:brightness-0 group-hover:invert" />
        </button>
        <img src="gambar/Profileup.png" alt="Profil" class="w-12 h-12 rounded-full object-cover border-2 border-gray-200 hover:border-primary transition-all duration-200 cursor-pointer" />
        <div class="hidden md:block w-px h-10 bg-gray-200"></div>
        <span class="hidden md:block font-medium text-gray-700 text-[17px]">Procurement</span>
      </div>
    </header>

    <!-- Filter Bar: Kategori Dropdown + Search -->
    <div class="flex items-center gap-4">
      <!-- Kategori Dropdown -->
      <div class="relative w-48">
        <select id="filter-kategori"
          class="w-full appearance-none px-4 py-3 pr-10 rounded-xl border border-gray-800 bg-white text-gray-800 font-medium text-sm outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-200 cursor-pointer">
          <option value="semua">Kategori</option>
          <option value="atk">ATK</option>
          <option value="elektronik">Elektronik</option>
          <option value="furniture">Furniture</option>
          <option value="cleaning">Cleaning Supply</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </div>
      </div>
      <!-- Search Input -->
      <div class="flex-1 relative">
        <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
        <input id="search-input" type="text" placeholder="Search"
          class="w-full pl-12 pr-4 py-3 rounded-xl border border-gray-800 bg-white text-sm text-gray-700 outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-200" />
      </div>
    </div>

    <!-- Vendor Notification Table -->
    <div class="overflow-x-auto rounded-xl border border-gray-200 bg-white shadow-sm">
      <table class="w-full border-collapse" id="notif-table">
        <thead>
          <tr class="border-b border-gray-200 bg-blue-600">
            <th class="px-5 py-3.5 text-left text-sm font-semibold text-white w-[25%]">Nama Vendor</th>
            <th class="px-5 py-3.5 text-left text-sm font-semibold text-white w-[25%]">Kategori</th>
            <th class="px-5 py-3.5 text-center text-sm font-semibold text-white w-[25%]">Profile</th>
            <th class="px-5 py-3.5 text-center text-sm font-semibold text-white w-[25%]">Kirim Email</th>
          </tr>
        </thead>
        <tbody id="table-body">
          <!-- Diisi oleh JavaScript -->
        </tbody>
      </table>
    </div>

  </main>

  <!-- ========== MODAL: Profile Vendor ========== -->
  <div id="profile-modal" class="fixed inset-0 z-50 items-center justify-center bg-black/40 backdrop-blur-sm">
    <div class="modal-animate bg-white rounded-2xl shadow-2xl w-full max-w-md mx-4 p-7 flex flex-col gap-4">
      <!-- Header -->
      <div class="flex items-center justify-between">
        <h2 class="text-xl font-extrabold text-gray-900" style="font-family:'Futura-Bold',Helvetica,sans-serif;">Profil Vendor</h2>
        <button id="close-profile-modal"
          class="w-9 h-9 rounded-lg bg-red-500 text-white flex items-center justify-center hover:bg-red-600 active:scale-90 transition-all duration-200 text-lg font-bold">
          ✕
        </button>
      </div>
      <hr class="border-gray-100" />
      <!-- Vendor Info -->
      <div class="flex flex-col gap-3">
        <div class="flex items-center gap-4">
          <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold text-xl" id="modal-avatar">E</div>
          <div>
            <p class="font-bold text-gray-800 text-lg" id="modal-vendor-name">—</p>
            <span class="inline-block px-3 py-0.5 rounded-full bg-primary/10 text-primary text-xs font-semibold mt-1" id="modal-vendor-kategori">—</span>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-3 mt-2">
          <div class="bg-gray-50 rounded-lg p-3">
            <p class="text-xs text-gray-400 mb-0.5">Email</p>
            <p class="text-sm font-semibold text-gray-700" id="modal-vendor-email">—</p>
          </div>
          <div class="bg-gray-50 rounded-lg p-3">
            <p class="text-xs text-gray-400 mb-0.5">Telepon</p>
            <p class="text-sm font-semibold text-gray-700" id="modal-vendor-phone">—</p>
          </div>
          <div class="bg-gray-50 rounded-lg p-3 col-span-2">
            <p class="text-xs text-gray-400 mb-0.5">Alamat</p>
            <p class="text-sm font-semibold text-gray-700" id="modal-vendor-alamat">—</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ========== MODAL: Kirim Email ========== -->
  <div id="email-modal" style="display:none;" class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 backdrop-blur-sm">
    <div class="modal-animate bg-white rounded-2xl shadow-2xl w-full max-w-md mx-4 p-7 flex flex-col gap-4">
      <div class="flex items-center justify-between">
        <h2 class="text-xl font-extrabold text-gray-900" style="font-family:'Futura-Bold',Helvetica,sans-serif;">Kirim Notifikasi Email</h2>
        <button id="close-email-modal"
          class="w-9 h-9 rounded-lg bg-red-500 text-white flex items-center justify-center hover:bg-red-600 active:scale-90 transition-all duration-200 text-lg font-bold">
          ✕
        </button>
      </div>
      <hr class="border-gray-100" />
      <div class="flex items-center gap-3 bg-gray-50 rounded-lg p-3">
        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold text-sm" id="email-avatar">E</div>
        <div>
          <p class="font-bold text-gray-800 text-sm" id="email-vendor-name">—</p>
          <p class="text-xs text-gray-400" id="email-vendor-email">—</p>
        </div>
      </div>
      <div class="flex flex-col gap-1.5">
        <label class="text-sm font-semibold text-gray-700" for="email-subject">Subjek</label>
        <input type="text" id="email-subject" placeholder="Masukkan subjek email..."
          class="w-full px-4 py-2.5 rounded-xl border border-gray-300 text-sm outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-200" />
      </div>
      <div class="flex flex-col gap-1.5">
        <label class="text-sm font-semibold text-gray-700" for="email-body">Isi Pesan</label>
        <textarea id="email-body" rows="5" placeholder="Tulis pesan notifikasi untuk vendor..."
          class="w-full px-4 py-2.5 rounded-xl border border-gray-300 text-sm outline-none resize-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-200"></textarea>
      </div>
      <button id="btn-send-email"
        class="w-full py-3 rounded-xl bg-[#4039c9] text-white font-bold text-sm hover:bg-[#0023cc] active:scale-95 transition-all duration-200 shadow hover:shadow-lg">
        Kirim Email
      </button>
    </div>
  </div>


  <!-- ========== TOAST ========== -->
  <div id="toast"
    class="fixed bottom-6 right-6 z-[60] bg-primary text-white px-5 py-3 rounded-xl shadow-lg text-sm font-bold opacity-0 pointer-events-none transition-all duration-300 flex items-center gap-2">
    <span id="toast-icon">✓</span>
    <span id="toast-msg">Berhasil!</span>
  </div>

  <script>
    // ============================================================
    // DATA DUMMY VENDOR
    // ============================================================
    const VENDORS = [{
        nama: 'Elektro Site',
        kategori: 'Elektronik',
        email: 'info@elektrosite.co.id',
        phone: '021-5551234',
        alamat: 'Jl. Raya Elektronik No.12, Jakarta Barat'
      },
      {
        nama: 'ATK Corp.',
        kategori: 'ATK',
        email: 'order@atkcorp.com',
        phone: '021-5559876',
        alamat: 'Jl. Stationery Blok A No.5, Tangerang'
      },
      {
        nama: 'FurNiture',
        kategori: 'Furniture',
        email: 'sales@furnitureindo.com',
        phone: '021-5558888',
        alamat: 'Jl. Mebel Indah No.8, Bekasi'
      },
      {
        nama: 'TokoTech',
        kategori: 'Elektronik',
        email: 'cs@tokotech.id',
        phone: '021-5552222',
        alamat: 'Jl. Gadget Corner No.3, Jakarta Selatan'
      },
      {
        nama: 'ATKKita',
        kategori: 'ATK',
        email: 'hello@atkkita.com',
        phone: '021-5553333',
        alamat: 'Jl. Alat Tulis No.17, Depok'
      },
      {
        nama: 'BersihMart',
        kategori: 'Cleaning Supply',
        email: 'order@bersihmart.co.id',
        phone: '021-5554444',
        alamat: 'Jl. Hygiene No.21, Bogor'
      },
      {
        nama: 'MebelKita',
        kategori: 'Furniture',
        email: 'info@mebelkita.com',
        phone: '021-5555555',
        alamat: 'Jl. Kayu Jati No.9, Cirebon'
      },
      {
        nama: 'CleanPro',
        kategori: 'Cleaning Supply',
        email: 'sales@cleanpro.id',
        phone: '021-5556666',
        alamat: 'Jl. Sanitasi No.14, Bandung'
      },
      {
        nama: 'GadgetPro',
        kategori: 'Elektronik',
        email: 'support@gadgetpro.id',
        phone: '021-5557777',
        alamat: 'Jl. Digital No.6, Jakarta Utara'
      },
      {
        nama: 'Nusa ATK',
        kategori: 'ATK',
        email: 'order@nusaatk.com',
        phone: '021-5558888',
        alamat: 'Jl. Paper Mart No.11, Surabaya'
      },
    ];

    // ---- Elements ----
    const filterKategori = document.getElementById('filter-kategori');
    const searchInput = document.getElementById('search-input');
    const tableBody = document.getElementById('table-body');

    // Profile modal
    const profileModal = document.getElementById('profile-modal');
    const closeProfileModal = document.getElementById('close-profile-modal');

    // Email modal
    const emailModal = document.getElementById('email-modal');
    const closeEmailModal = document.getElementById('close-email-modal');
    const btnSendEmail = document.getElementById('btn-send-email');

    let currentEmailVendor = null;

    // =============================================
    // RENDER TABLE
    // =============================================
    function renderTable() {
      const kategori = filterKategori.value;
      const query = searchInput.value.trim().toLowerCase();

      // Filter vendors
      let filtered = VENDORS.filter(v => {
        const matchKategori = kategori === 'semua' || v.kategori.toLowerCase().replace(' ', '') === kategori.replace(' ', '');
        const matchSearch = v.nama.toLowerCase().includes(query) || v.kategori.toLowerCase().includes(query);
        return matchKategori && matchSearch;
      });

      tableBody.innerHTML = '';

      if (filtered.length === 0) {
        tableBody.innerHTML = `
          <tr>
            <td colspan="4" class="px-5 py-10 text-center text-gray-300 text-sm italic">Tidak ada vendor ditemukan</td>
          </tr>
        `;
        return;
      }

      filtered.forEach((vendor, idx) => {
        const row = document.createElement('tr');
        row.className = 'border-b border-gray-100 hover:bg-[#f8f9ff] transition-colors duration-150';
        row.innerHTML = `
          <td class="px-5 py-4 text-sm font-medium text-gray-800">${vendor.nama}</td>
          <td class="px-5 py-4 text-sm text-gray-600">${vendor.kategori}</td>
          <td class="px-5 py-4 text-center">
            <button class="btn-profile text-accent font-semibold text-sm underline underline-offset-2 hover:text-primary transition-colors" data-index="${VENDORS.indexOf(vendor)}">
              Profile
            </button>
          </td>
          <td class="px-5 py-4 text-center">
            <button class="btn-email w-10 h-10 rounded-lg bg-gray-100 hover:bg-primary/10 text-gray-600 hover:text-primary flex items-center justify-center mx-auto transition-all duration-200" data-index="${VENDORS.indexOf(vendor)}" title="Kirim email ke ${vendor.nama}">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
            </button>
          </td>
        `;

        // Animate row
        row.style.opacity = '0';
        row.style.transform = 'translateY(-4px)';
        tableBody.appendChild(row);
        setTimeout(() => {
          row.style.transition = 'opacity 0.2s, transform 0.2s';
          row.style.opacity = '1';
          row.style.transform = 'translateY(0)';
        }, idx * 30);
      });

      // Attach event listeners
      document.querySelectorAll('.btn-profile').forEach(btn => {
        btn.addEventListener('click', () => openProfileModal(parseInt(btn.dataset.index)));
      });
      document.querySelectorAll('.btn-email').forEach(btn => {
        btn.addEventListener('click', () => openEmailModal(parseInt(btn.dataset.index)));
      });
    }

    // ---- Filter & Search ----
    filterKategori.addEventListener('change', renderTable);
    searchInput.addEventListener('input', renderTable);

    // ---- Init ----
    renderTable();

    // =============================================
    // PROFILE MODAL
    // =============================================
    function openProfileModal(index) {
      const v = VENDORS[index];
      document.getElementById('modal-avatar').textContent = v.nama.charAt(0);
      document.getElementById('modal-vendor-name').textContent = v.nama;
      document.getElementById('modal-vendor-kategori').textContent = v.kategori;
      document.getElementById('modal-vendor-email').textContent = v.email;
      document.getElementById('modal-vendor-phone').textContent = v.phone;
      document.getElementById('modal-vendor-alamat').textContent = v.alamat;
      profileModal.classList.add('show');
    }

    closeProfileModal.addEventListener('click', () => profileModal.classList.remove('show'));
    profileModal.addEventListener('click', (e) => {
      if (e.target === profileModal) profileModal.classList.remove('show');
    });

    // =============================================
    // EMAIL MODAL
    // =============================================
    function openEmailModal(index) {
      const v = VENDORS[index];
      currentEmailVendor = v;
      document.getElementById('email-avatar').textContent = v.nama.charAt(0);
      document.getElementById('email-vendor-name').textContent = v.nama;
      document.getElementById('email-vendor-email').textContent = v.email;
      document.getElementById('email-subject').value = '';
      document.getElementById('email-body').value = '';
      emailModal.style.display = 'flex';
    }

    closeEmailModal.addEventListener('click', () => emailModal.style.display = 'none');
    emailModal.addEventListener('click', (e) => {
      if (e.target === emailModal) emailModal.style.display = 'none';
    });

    btnSendEmail.addEventListener('click', () => {
      const subject = document.getElementById('email-subject').value.trim();
      const body = document.getElementById('email-body').value.trim();
      if (!subject || !body) {
        showToast('Harap isi subjek dan pesan!', true);
        return;
      }
      emailModal.style.display = 'none';
      showToast(`Email berhasil dikirim ke ${currentEmailVendor.nama}!`);
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