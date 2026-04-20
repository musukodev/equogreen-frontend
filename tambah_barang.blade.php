<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batch 1 - Equogreen</title>
    <!-- Using Tailwind CSS via CDN -->
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Custom checkbox */
        .vendor-checkbox {
            appearance: none;
            -webkit-appearance: none;
            width: 3.2rem;
            height: 2.2rem;
            border: 1.5px solid #1f2937;
            border-radius: 0.75rem;
            background: #fff;
            cursor: pointer;
            transition: all 0.2s;
            position: relative;
        }

        .vendor-checkbox:checked {
            background: #4039c9;
            border-color: #4039c9;
        }

        .vendor-checkbox:checked::after {
            content: '✓';
            color: white;
            font-size: 1rem;
            font-weight: 700;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .vendor-checkbox:hover {
            border-color: #4039c9;
            box-shadow: 0 0 0 3px rgba(64, 57, 201, 0.1);
        }

        /* Toast */
        #toast {
            display: flex;
        }
    </style>
</head>

<body class="flex h-screen overflow-hidden antialiased text-gray-800 bg-brand-bg">

    <!-- Sidebar -->
    <aside class="hidden lg:flex w-64 bg-white flex-col flex-shrink-0 h-full shadow-[2px_0_10px_rgba(0,0,0,0.02)] z-10">
        <!-- Logo -->
        <div class="h-28 flex items-center px-6 mt-2">
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

    <!-- Main Content -->
    <div class="flex-1 flex flex-col h-screen overflow-y-auto w-full">

        <!-- Main Workspace Padding Wrapper -->
        <main class="flex-1 p-4 md:p-10 relative w-full">

            <!-- Header -->
            <header class="flex flex-col lg:flex-row justify-between items-start lg:items-center mb-8 w-full gap-4">
                <!-- Left: Title & Back -->
                <div class="flex items-center gap-4">
                    <a href="batch_barang.html"
                        class="w-10 h-10 rounded-full border border-black flex items-center justify-center hover:bg-gray-200 transition">
                        <i class="fa-solid fa-arrow-left text-xl text-black"></i>
                    </a>
                    <h1 class="text-[28px] font-bold text-black leading-tight">Batch 1</h1>
                </div>

                <!-- Right: User Actions -->
                <div class="flex items-center gap-4">
                    <button
                        class="w-11 h-11 rounded-full border border-gray-400 bg-transparent flex items-center justify-center hover:bg-gray-100 transition">
                        <i class="fa-solid fa-bell text-xl text-black"></i>
                    </button>
                    <button class="w-11 h-11 rounded-full bg-black flex items-center justify-center shadow-md">
                        <i class="fa-solid fa-user text-xl text-white"></i>
                    </button>
                    <div class="h-8 w-px bg-gray-400 mx-1"></div>
                    <span class="text-[15px] text-gray-800 font-medium">ATK Corner</span>
                </div>
            </header>

            <!-- Form Workspace -->
            <div class="w-full">

                <!-- Form Card -->
                <div
                    class="bg-white rounded-xl border border-gray-400 p-6 md:p-8 shadow-sm flex flex-col relative w-full">

                    <!-- Top Dropdown Area -->
                    <div class="mb-8">
                        <div class="relative w-72">
                            <select id="vendor-category"
                                class="w-full appearance-none px-4 py-3 pr-10 rounded-xl border border-gray-800 bg-white text-gray-800 font-medium text-base outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all duration-200 cursor-pointer">
                                <option value="atk">ATK</option>
                                <option value="elektronik">Elektronik</option>
                                <option value="furniture">Furniture</option>
                                <option value="cleaning">Cleaning Supply</option>
                            </select>
                            <!-- Dropdown arrow -->
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div id="vendor-checkboxes" class="grid grid-cols-2 sm:grid-cols-4 gap-x-6 gap-y-4">
                        <!-- Akan diisi otomatis oleh JavaScript -->
                    </div>

                    <!-- Description Topic -->
                    <div class="flex items-center gap-4 mt-6 mb-3"> <i class="fa-solid fa-box text-[32px] text-black"></i>
                        <div>
                            <h3 class="text-[16px] font-bold text-black leading-tight">Spesifikasi Barang</h3>
                            <p class="text-[14px] text-gray-400 font-medium mt-0.5">Deskripsikan spesifikasi barang yang
                                dibutuhkan</p>
                        </div>
                    </div>

                    <!-- Table Wrapper with Add Button Container -->
                    <div class="flex items-end gap-3 mb-8 w-full">
                        <!-- Data Table -->
                        <div class="w-full overflow-x-auto flex-1">
                            <table class="w-full border-collapse border border-gray-400 min-w-[600px]">
                                <thead>
                                    <tr class="bg-[#3a3fe0] text-white">
                                        <th
                                            class="border border-gray-400 py-3 text-[14px] font-normal w-1/3 text-center">
                                            Nama Barang</th>
                                        <th
                                            class="border border-gray-400 py-3 text-[14px] font-normal w-1/3 text-center">
                                            Spesifikasi detail</th>
                                        <th
                                            class="border border-gray-400 py-3 text-[14px] font-normal w-1/3 text-center">
                                            Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody id="tableBody">
                                    <tr>
                                        <td class="border border-gray-400 p-0">
                                            <input type="text" placeholder="Nama Barang"
                                                class="w-full h-[45px] px-2 outline-none border-none">
                                        </td>
                                        <td class="border border-gray-400 p-0">
                                            <input type="text" placeholder="Spesifikasi detail"
                                                class="w-full h-[45px] px-2 outline-none border-none">
                                        </td>
                                        <td class="border border-gray-400 p-0">
                                            <input type="number" placeholder="Jumlah"
                                                class="w-full h-[45px] px-2 outline-none border-none">
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <!-- Floating Plus Button (to the right of the table's bottom corner) -->
                        <div class="flex-shrink-0 flex items-center justify-center mb-1">
                            <button onclick="tambahBaris()"
                                class="w-8 h-8 rounded-full bg-black text-white hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fa-solid fa-plus text-[14px]"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Action Buttons Menu -->
                    <div class="flex flex-col sm:flex-row justify-end items-center gap-3">
                        <button type="button"
                            class="w-full sm:w-auto px-8 py-2.5 border border-black rounded-lg bg-white text-black font-bold hover:bg-gray-100 transition flex items-center justify-center gap-2">
                            <i class="fa-regular fa-pen-to-square"></i> Edit
                        </button>
                        <button type="button"
                            class="w-full sm:w-auto px-8 py-2.5 bg-black rounded-lg text-white font-bold hover:bg-gray-800 transition flex items-center justify-center gap-2">
                            <i class="fa-regular fa-trash-can"></i> Hapus
                        </button>
                        <button type="button"
                            class="w-full sm:w-[150px] py-2.5 bg-[#1e40ff] text-white font-bold rounded-lg hover:bg-blue-700 transition">
                            Kirim
                        </button>
                    </div>

                </div>

            </div>

        </main>
    </div>
    <script>
        function tambahBaris() {
            const table = document.getElementById('tableBody');

            const row = document.createElement('tr');

            row.innerHTML = `
        <td class="border border-gray-400 p-0">
            <input type="text" placeholder="Nama Barang"
                class="w-full h-[45px] px-2 outline-none border-none focus:bg-blue-50">
        </td>
        <td class="border border-gray-400 p-0">
            <input type="text" placeholder="Spesifikasi detail"
                class="w-full h-[45px] px-2 outline-none border-none focus:bg-blue-50">
        </td>
        <td class="border border-gray-400 p-0">
            <input type="number" placeholder="Jumlah"
                class="w-full h-[45px] px-2 outline-none border-none focus:bg-blue-50">
        </td>
    `;

            table.appendChild(row);
        }

        const DATA = {
            atk: {
                vendors: {
                    'ATKKita': [],
                    'AT&K': [],
                    'Abadi Jaya': [],
                    'Jaya ATK': [],
                    'PT Bias': [],
                    'TulisTangan': [],
                    'Nusa ATK': [],
                    'Office.co': [],
                    'ABCORP': [],
                    'PT Kertas': [],
                    'Indorim': [],
                    'Mahajaya': []
                }
            },
            elektronik: {
                vendors: {
                    'TokoTech': [],
                    'ElektroMart': [],
                    'GadgetPro': [],
                    'DigiSupply': [],
                    'PowerPlus': [],
                    'NetConnect': []
                }
            },
            furniture: {
                vendors: {
                    'MebelKita': [],
                    'FurniPro': [],
                    'WoodCraft': [],
                    'KantorBaru': []
                }
            },
            cleaning: {
                vendors: {
                    'BersihMart': [],
                    'CleanPro': [],
                    'HygienePlus': [],
                    'SparkleClean': []
                }
            }
        };

        // ---- Elements ----
        const categorySelect = document.getElementById('vendor-category');
        const vendorContainer = document.getElementById('vendor-checkboxes');
        const tableBody = document.getElementById('table-body');
        const btnAddRow = document.getElementById('btn-add-row');
        const btnEdit = document.getElementById('btn-edit');
        const btnHapus = document.getElementById('btn-hapus');
        const btnKirim = document.getElementById('btn-kirim');
        let isEditing = false;

        // =============================================
        // RENDER VENDOR CHECKBOXES based on category
        // =============================================
        function renderVendors(category) {
            const vendorData = DATA[category];
            if (!vendorData) return;

            vendorContainer.innerHTML = '';
            const vendorNames = Object.keys(vendorData.vendors);

            vendorNames.forEach(name => {
                const label = document.createElement('label');
                label.className = 'flex items-center gap-3 cursor-pointer group';
                label.innerHTML = `
          <input type="checkbox" class="vendor-checkbox" name="vendor" value="${name}"/>
          <span class="text-base text-gray-800 group-hover:text-primary transition-colors">${name}</span>
        `;
                // Event listener updateTable dihapus agar checkbox tidak mempengaruhi tabel
                vendorContainer.appendChild(label);
            });
        }

        // ---- Category Dropdown Change ----
        categorySelect.addEventListener('change', () => {
            renderVendors(categorySelect.value);
        });

        // ---- Init: render default category ----
        renderVendors(categorySelect.value);

        // ---- Add Row ----
        btnAddRow.addEventListener('click', () => {
            const emptyRow = document.getElementById('empty-row');
            if (emptyRow) emptyRow.remove();

            const newRow = document.createElement('tr');
            newRow.className = 'border-b border-gray-200 hover:bg-gray-50 transition-colors';
            newRow.innerHTML = `
        <td class="px-5 py-3 border-r border-gray-200">
          <input type="text" class="w-full outline-none text-sm text-gray-700 bg-transparent placeholder:text-gray-300" placeholder="Nama barang..." ${isEditing ? '' : 'disabled'}/>
        </td>
        <td class="px-5 py-3 border-r border-gray-200">
          <input type="text" class="w-full outline-none text-sm text-gray-700 bg-transparent placeholder:text-gray-300" placeholder="Detail spesifikasi..." ${isEditing ? '' : 'disabled'}/>
        </td>
        <td class="px-5 py-3">
          <input type="number" class="w-full outline-none text-sm text-gray-700 bg-transparent placeholder:text-gray-300" placeholder="0" min="0" ${isEditing ? '' : 'disabled'}/>
        </td>
      `;
            newRow.style.opacity = '0';
            newRow.style.transform = 'translateY(-8px)';
            tableBody.appendChild(newRow);
            requestAnimationFrame(() => {
                newRow.style.transition = 'opacity 0.25s, transform 0.25s';
                newRow.style.opacity = '1';
                newRow.style.transform = 'translateY(0)';
            });
            showToast('Baris baru ditambahkan!');
        });

        // ---- Edit / Simpan Toggle ----
        btnEdit.addEventListener('click', () => {
            const allInputs = tableBody.querySelectorAll('input');
            if (allInputs.length === 0 || document.getElementById('empty-row')) {
                showToast('Belum ada data di tabel!', true);
                return;
            }
            if (isEditing) {
                allInputs.forEach(input => input.disabled = true);
                btnEdit.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg> Edit`;
                btnEdit.classList.remove('border-primary', 'text-primary');
                isEditing = false;
                showToast('Data berhasil disimpan!');
            } else {
                allInputs.forEach(input => input.disabled = false);
                const firstEmpty = Array.from(allInputs).find(i => !i.value.trim());
                if (firstEmpty) firstEmpty.focus();
                btnEdit.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> Simpan`;
                btnEdit.classList.add('border-primary', 'text-primary');
                isEditing = true;
            }
        });

        // ---- Hapus ----
        btnHapus.addEventListener('click', () => {
            const allInputs = tableBody.querySelectorAll('input');
            if (allInputs.length === 0) {
                showToast('Tidak ada data untuk dihapus.', true);
                return;
            }
            tableBody.innerHTML = `
        <tr id="empty-row">
          <td colspan="3" class="px-5 py-8 text-center text-gray-300 text-sm italic">Klik tombol + untuk menambah barang</td>
        </tr>
      `;
            isEditing = false;
            btnEdit.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg> Edit`;
            btnEdit.classList.remove('border-primary', 'text-primary');
            showToast('Data berhasil dihapus!');
        });

        // ---- Kirim ----
        btnKirim.addEventListener('click', () => {
            // Logic pengiriman tetap ada, tapi tidak bergantung pada auto-fill
            showToast('Batch berhasil dikirim!');
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