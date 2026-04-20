<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat batch </title>
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
    </style>
</head>

<body class="flex h-screen overflow-hidden antialiased text-gray-800 bg-brand-bg">

    <!-- Sidebar -->
    <!-- Sidebar Overlay -->
    <div id="sidebarOverlay" class="fixed inset-0 bg-black/50 z-40 hidden lg:hidden" onclick="toggleSidebar()"></div>
    <aside id="sidebar" class="fixed inset-y-0 left-0 transform -translate-x-full lg:relative lg:translate-x-0 transition-transform duration-300 ease-in-out z-50 flex w-[260px] bg-white flex-col flex-shrink-0 h-full shadow-lg">
        <!-- Logo -->
        <div class="h-28 flex items-center px-6 mt-2">
            <img src="gambar/logo2.png" alt="Equogreen Logo">
        </div>

        <div class="px-8 mt-4 w-full">
            <p class="text-[14px] text-[#9ca3af] font-medium mb-4">Overview</p>
            <nav class="flex flex-col gap-[22px] w-full">
                <div class="w-full">
                    <a href="#" class="flex items-center gap-3 text-[#4b5563] font-bold mb-[10px] hover:text-black transition">
                        <i class="ph-bold text-[#4b5563] ph-squares-four text-[26px]"></i>
                        <span class="text-[17px] tracking-tight">Dashboard</span>
                    </a>
                    <div class="h-[2px] bg-[#d1d5db] w-full max-w-[135px]"></div>
                </div>
                <div class="w-full">
                    <a href="/batch_barang" class="flex items-center gap-3 text-[#1f2937] font-bold mb-[10px] hover:text-black transition">
                        <i class="ph-bold text-[#1f2937] ph-database text-[26px] -ml-0.5"></i>
                        <span class="text-[17px] tracking-tight">Periksa Barang</span>
                    </a>
                    <div class="h-[2px] bg-[#d1d5db] w-full max-w-[155px]"></div>
                </div>
                <div class="w-full">
                    <a href="/notifikasi" class="flex items-center gap-3 text-[#4b5563] font-bold mb-[10px] hover:text-black transition">
                        <div class="relative">
                            <i class="ph-bold ph-bell text-[26px]"></i>
                            <i class="ph-fill ph-plus-circle text-[12px] bg-white rounded-full absolute -bottom-0.5 -right-0 text-black border border-white"></i>
                        </div>
                        <span class="text-[17px] tracking-tight">Kelola Notifikasi</span>
                    </a>
                    <div class="h-[2px] bg-[#d1d5db] w-full max-w-[150px]"></div>
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

        <div class="px-8 mt-auto mb-[40px] w-full">
            <p class="text-[14px] text-[#9ca3af] font-medium mb-5">Pengaturan</p>
            <nav class="flex flex-col gap-[22px] w-full">
                <a href="#" class="flex items-center gap-3 text-[#4b5563] font-bold hover:text-black transition">
                    <i class="ph-bold ph-gear text-[26px]"></i>
                    <span class="text-[17px] tracking-tight">Pengaturan</span>
                </a>
                <a href="#" class="flex items-center gap-3 text-[#ef4444] font-bold hover:text-red-700 transition">
                    <i class="ph-bold ph-sign-out text-[26px]"></i>
                    <span class="text-[17px] tracking-tight">Logout</span>
                </a>
            </nav>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col h-screen overflow-y-auto w-full">

        <!-- Main Workspace Padding Wrapper -->
        <main class="flex-1 p-4 md:p-10 relative w-full">

            <!-- Header -->
            <header class="flex flex-col xl:flex-row justify-between items-start xl:items-center mb-6 w-full gap-5">
                <!-- Left: Title & Back & Tabs -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center w-full lg:w-auto gap-4 sm:gap-6">
                    <div class="flex items-center gap-3">
                        <button onclick="toggleSidebar()" class="lg:hidden w-11 h-11 rounded-lg border border-gray-300 bg-white shadow-sm flex items-center justify-center hover:bg-gray-50 transition flex-shrink-0">
                            <i class="ph-bold ph-list text-xl text-black"></i>
                        </button>
                        <a href="#"
                            class="w-10 h-10 rounded-full border border-black flex items-center justify-center hover:bg-gray-200 transition">
                            <i class="ph-bold ph-arrow-left text-xl text-black"></i>
                        </a>
                        <h1 class="text-[36px] font-bold text-black ml-2">2026</h1>
                    </div>

                    <div class="flex items-center gap-6 mt-1 sm:mt-0">
                        <a href="/batch_barang" class="relative text-black font-medium text-[16px] xl:text-[18px] pb-1 transition-colors duration-300 hover:text-[#8196ff] border-b-2 border-[#768bd4]">
                            Buat Batch
                        </a>
                        <a href="/periksa_barang" class="relative text-black font-medium text-[16px] xl:text-[18px] pb-1 transition-colors duration-300 hover:text-[#8196ff] after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-[#8196ff] after:transition-all after:duration-300 hover:after:w-full">
                            Periksa Barang
                        </a>
                    </div>
                </div>

                <!-- Right: User Actions -->
                <div class="flex items-center gap-4 align-middle mt-2 xl:mt-0">
                    <button class="w-10 h-10 rounded-full border border-black bg-transparent flex items-center justify-center hover:bg-gray-100 transition">
                        <i class="ph-fill ph-bell text-xl text-black"></i>
                    </button>
                    <button class="w-10 h-10 rounded-full bg-black flex items-center justify-center shadow-md">
                        <i class="ph-fill ph-user text-xl text-white"></i>
                    </button>
                    <div class="h-6 w-[1px] bg-gray-400 mx-1"></div>
                    <span class="text-[15px] text-black font-medium">ATK Corner</span>
                </div>
            </header>

            <!-- Form Workspace / Grid Card -->
            <div class="w-full">

                <div class="bg-white rounded-xl border border-gray-400 p-6 md:p-8 shadow-sm w-full">

                    <!-- Toolbar (Search and Add) -->
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
                        <input type="text" placeholder="Search"
                            class="w-full sm:w-[60%] lg:w-[40%] xl:w-[70%] border border-gray-400 rounded-md px-4 py-2 text-[15px] outline-none focus:border-black transition">

                        <button onclick="openModal()"
                            class="w-full sm:w-auto bg-[#1e40ff] text-white font-bold rounded-md px-6 py-2 flex items-center justify-center gap-2 hover:bg-blue-700 transition">
                            <i class="fa-solid fa-plus text-sm"></i> Tambah Batch
                        </button>
                    </div>

                    <!-- Batch Grid -->
                    <!-- Tabel Batch -->
                    <!-- Title -->
                    <div class="mb-4">
                        <h2 class="text-xl font-bold text-black">Daftar Batch</h2>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
                            <thead class="bg-blue-600 ">
                                <tr>
                                    <th class="px-4 py-3 text-left text-sm font-bold border-b text-white">No</th>
                                    <th class="px-4 py-3 text-left text-sm font-bold border-b text-white">Waktu Mulai</th>
                                    <th class="px-4 py-3 text-left text-sm font-bold border-b text-white">Waktu Selesai</th>
                                    <th class="px-4 py-3 text-center text-sm font-bold border-b text-white">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="batchTable">
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="px-4 py-3">1</td>
                                    <td class="px-4 py-3">12 April 2026, 09:00</td>
                                    <td class="px-4 py-3">12 April 2026, 17:00</td>
                                    <td class="px-4 py-3 text-center flex justify-center gap-3">
                                        <a href="/tambah_barang"
                                            class="flex items-center gap-1 px-3 py-1.5 bg-blue-600 text-white text-xs rounded-md hover:bg-blue-700 transition">
                                            <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                                            Buka
                                        </a>
                                        <button class="text-yellow-600 hover:text-yellow-800 edit-btn">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </button>
                                        <button class="text-red-600 hover:text-red-800 delete-btn">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr class="border-b hover:bg-gray-50">
                                    <td class="px-4 py-3">2</td>
                                    <td class="px-4 py-3">13 Mei 2026, 08:00</td>
                                    <td class="px-4 py-3">13 Mei 2026, 12:30</td>
                                    <td class="px-4 py-3 text-center flex justify-center gap-3">
                                        <a href="/tambah_barang"
                                            class="flex items-center gap-1 px-3 py-1.5 bg-blue-600 text-white text-xs rounded-md hover:bg-blue-700 transition">
                                            <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                                            Buka
                                        </a>
                                        <button class="text-yellow-600 hover:text-yellow-800 edit-btn">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </button>
                                        <button class="text-red-600 hover:text-red-800 delete-btn">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

        </main>
    </div>

    <!-- Modal Tambah Batch -->
    <div id="tambahBatchModal"
        class="fixed inset-0 bg-black bg-opacity-0 flex items-center justify-center z-50 p-4 opacity-0 pointer-events-none transition-all duration-300">
        <div id="modalBox"
            class="bg-brand-bg rounded-lg shadow-xl w-full max-w-[600px] overflow-hidden border border-gray-400 transform scale-95 opacity-0 transition-all duration-300">
            <!-- Modal Header -->
            <div class="bg-white px-6 py-4 flex justify-between items-start">
                <div>
                    <h2 class="text-[17px] font-bold text-black leading-tight">Batch Deadline</h2>
                    <p class="text-[13px] text-gray-700 mt-1">Atur tenggat waktu batch pada halaman ini</p>
                </div>
                <button onclick="closeModal()"
                    class="w-8 h-8 bg-[#ff4a4a] text-white rounded flex items-center justify-center hover:bg-red-600 transition shadow-sm mt-0.5">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="p-6 pb-8 border-t border-gray-400">

                <!-- Badge -->
                <div class="mb-5">
                    <span
                        class="inline-block px-4 py-1.5 bg-white border border-black rounded text-[15px] font-bold text-black leading-none">
                        Batch 10
                    </span>
                </div>

                <!-- Time Input Card 1 -->
                <div
                    class="bg-[#4142cf] rounded flex flex-col md:flex-row mb-4 shadow-sm w-full border border-[#4142cf]">
                    <!-- Icon Side -->
                    <div
                        class="w-[80px] h-full min-h-[80px] flex items-center justify-center border-r border-[#696ce6] flex-shrink-0 relative">
                        <i class="fa-regular fa-clock text-white text-[32px] font-light"></i>
                        <i
                            class="fa-solid fa-clock text-white text-[12px] bg-[#4142cf] rounded-full absolute bottom-[22px] right-[20px] border border-[#4142cf]"></i>
                    </div>
                    <!-- Input Side -->
                    <div class="flex-1 p-4 px-5">
                        <div class="flex flex-col sm:flex-row gap-4">
                            <div class="flex-1">
                                <label class="block text-white text-[13px] mb-1.5">Start</label>
                                <input type="time"
                                    class="w-full bg-white rounded-md px-3 py-1.5 text-black outline-none h-[34px] shadow-sm">
                            </div>
                            <div class="flex-1">
                                <label class="block text-white text-[13px] mb-1.5">End</label>
                                <input type="time"
                                    class="w-full bg-white rounded-md px-3 py-1.5 text-black outline-none h-[34px] shadow-sm">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Time Input Card 2 -->
                <div
                    class="bg-[#4142cf] rounded flex flex-col md:flex-row mb-6 shadow-sm w-full border border-[#4142cf]">
                    <!-- Icon Side -->
                    <div
                        class="w-[80px] h-full min-h-[80px] flex items-center justify-center border-r border-[#696ce6] flex-shrink-0 relative">
                        <i class="fa-regular fa-calendar text-white text-[32px] font-light"></i>
                        <i
                            class="fa-solid fa-clock text-white text-[12px] bg-[#4142cf] rounded-full absolute bottom-[22px] right-[20px] border border-[#4142cf]"></i>
                    </div>
                    <!-- Input Side -->
                    <div class="flex-1 p-4 px-5">
                        <div class="flex flex-col sm:flex-row gap-4">
                            <div class="flex-1">
                                <label class="block text-white text-[13px] mb-1.5">Start</label>
                                <input type="date"
                                    class="w-full bg-white rounded-md px-3 py-1.5 text-black outline-none h-[34px] shadow-sm text-[13px]">
                            </div>
                            <div class="flex-1">
                                <label class="block text-white text-[13px] mb-1.5">End</label>
                                <input type="date"
                                    class="w-full bg-white rounded-md px-3 py-1.5 text-black outline-none h-[34px] shadow-sm text-[13px]">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <button onclick="simpanBatch()"
                    class="w-full bg-[#1e40ff] hover:bg-blue-700 text-white font-normal text-[15px] py-2.5 rounded shadow transition">
                    Simpan
                </button>

            </div>
        </div>
    </div>


    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebarOverlay');
            if (sidebar.classList.contains('-translate-x-full')) {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.remove('hidden');
            } else {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
            }
        }
    </script>

</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // 1. Fitur Pencarian (Search)
        const searchInput = document.querySelector('input[placeholder="Search"]');
        const batchCards = document.querySelectorAll('.grid.grid-cols-1 > div');

        if (searchInput) {
            searchInput.addEventListener('input', function(e) {
                const term = e.target.value.toLowerCase();
                batchCards.forEach(card => {
                    const titleElement = card.querySelector('h2');
                    if (titleElement) {
                        const title = titleElement.textContent.toLowerCase();
                        if (title.includes(term)) {
                            card.style.display = 'flex';
                        } else {
                            card.style.display = 'none';
                        }
                    }
                });
            });
        }

        // 2. Interaktivitas Tombol Edit & Delete 
        batchCards.forEach(card => {
            const titleElement = card.querySelector('h2');
            if (!titleElement) return;
            const title = titleElement.textContent;

            const editBtn = card.querySelector('.fa-pen-to-square')?.parentElement;
            const deleteBtn = card.querySelector('.fa-trash-can')?.parentElement;

            if (editBtn) {
                editBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    e.preventDefault();
                    openModal(title);
                });
            }

            if (deleteBtn) {
                deleteBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    e.preventDefault();

                    Swal.fire({
                        heightAuto: false,
                        scrollbarPadding: false,
                        title: 'Hapus ' + title + '?',
                        text: "Data ini akan dihapus permanen!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#ef4444',
                        cancelButtonColor: '#4b5563',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal',
                        background: '#ffffff',
                        customClass: {
                            title: 'text-black font-bold',
                            popup: 'rounded-xl border border-gray-200 shadow-xl pb-2'
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            card.style.transition = 'all 0.3s ease';
                            card.style.transform = 'scale(0.8)';
                            card.style.opacity = '0';
                            setTimeout(() => {
                                card.remove();
                                Swal.fire({
                                    heightAuto: false,
                                    scrollbarPadding: false,
                                    title: 'Terhapus!',
                                    text: title + ' berhasil dihapus.',
                                    icon: 'success',
                                    showConfirmButton: false,
                                    timer: 1500,
                                    customClass: {
                                        popup: 'rounded-xl border border-gray-200 shadow-xl'
                                    }
                                });
                            }, 300);
                        }
                    });
                });
            }
        });
    });

    function openModal(batchName) {
        const modal = document.getElementById('tambahBatchModal');
        const box = document.getElementById('modalBox');

        // Dynamic Title Update based on Edit/Tambah
        const modalTitle = document.querySelector('#modalBox h2');
        const badgeTitle = document.querySelector('#modalBox span.inline-block');

        if (typeof batchName !== 'string') {
            batchName = 'Batch Baru';
        }

        if (modalTitle && badgeTitle) {
            if (batchName === 'Batch Baru') {
                modalTitle.textContent = 'Batch Deadline';
                badgeTitle.textContent = 'Batch 10';
            } else {
                modalTitle.textContent = 'Edit ' + batchName;
                badgeTitle.textContent = batchName;
            }
        }

        modal.classList.remove('pointer-events-none', 'opacity-0');
        modal.classList.add('opacity-100', 'bg-opacity-40');

        box.classList.remove('scale-95', 'opacity-0');
        box.classList.add('scale-100', 'opacity-100');
    }

    function closeModal() {
        const modal = document.getElementById('tambahBatchModal');
        const box = document.getElementById('modalBox');

        modal.classList.remove('opacity-100', 'bg-opacity-40');
        modal.classList.add('opacity-0');

        box.classList.remove('scale-100', 'opacity-100');
        box.classList.add('scale-95', 'opacity-0');

        setTimeout(() => {
            modal.classList.add('pointer-events-none');
        }, 300);
    }

    function simpanBatch() {
        closeModal();
        setTimeout(() => {
            Swal.fire({
                heightAuto: false,
                scrollbarPadding: false,
                title: 'Tersimpan!',
                text: 'Data batch berhasil disimpan.',
                icon: 'success',
                showConfirmButton: false,
                timer: 1500,
                customClass: {
                    popup: 'rounded-xl border border-gray-200 shadow-xl'
                }
            });
        }, 300);
    }
    document.addEventListener('DOMContentLoaded', () => {
        const rows = document.querySelectorAll('#batchTable tr');

        rows.forEach((row, index) => {
            const viewBtn = row.querySelector('.view-btn');
            const editBtn = row.querySelector('.edit-btn');
            const deleteBtn = row.querySelector('.delete-btn');

            const no = index + 1;

            if (viewBtn) {
                viewBtn.addEventListener('click', () => {
                    Swal.fire({
                        title: 'Detail Batch ' + no,
                        text: 'Menampilkan detail batch.',
                        icon: 'info'
                    });
                });
            }

            if (editBtn) {
                editBtn.addEventListener('click', () => {
                    openModal('Batch ' + no);
                });
            }

            if (deleteBtn) {
                deleteBtn.addEventListener('click', () => {
                    Swal.fire({
                        title: 'Hapus Batch ' + no + '?',
                        text: 'Data akan dihapus!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#ef4444',
                        confirmButtonText: 'Hapus'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            row.remove();
                        }
                    });
                });
            }
        });
    });
</script>

</html>