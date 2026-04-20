<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Vendor - Equogreen</title>
    <!-- Using Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            bg: '#f1f5fa', /* Main Content Background, light bluish gray */
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
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Hide scrollbar for overflow areas */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
</head>

<body class="flex h-screen overflow-hidden antialiased text-gray-800 bg-brand-bg">

    <!-- Sidebar -->
    <!-- Sidebar Overlay -->
    <div id="sidebarOverlay" class="fixed inset-0 bg-black/50 z-40 hidden lg:hidden" onclick="toggleSidebar()"></div>
    <aside id="sidebar" class="fixed inset-y-0 left-0 transform -translate-x-full lg:relative lg:translate-x-0 transition-transform duration-300 ease-in-out z-50 flex w-[260px] bg-white flex-col flex-shrink-0 h-full shadow-lg">
        <!-- Logo -->
        <div class="h-28 flex items-center px-6 mt-2 gap-3">
            <img src="gambar/logo2.png" alt="Equogreen Logo" class="h-10 object-contain">
            <span class="text-[20px] font-bold text-black tracking-tight">Equogreen</span>
        </div>

        <div class="px-8 mt-4 w-full">
            <p class="text-[14px] text-[#9ca3af] font-medium mb-4">Overview</p>
            <nav class="flex flex-col gap-[22px] w-full">
                <div class="w-full">
                    <a href="dashboard_vendor.html" class="flex items-center gap-3 text-[#1f2937] font-bold mb-[10px] hover:text-black transition">
                        <i class="ph-bold text-[#1f2937] ph-squares-four text-[26px]"></i>
                        <span class="text-[17px] tracking-tight">Dashboard</span>
                    </a>
                    <div class="h-[2px] bg-[#d1d5db] w-full max-w-[135px]"></div>
                </div>
                <div class="w-full">
                    <a href="#" class="flex items-center gap-3 text-[#4b5563] font-bold mb-[10px] hover:text-black transition">
                        <i class="ph-bold text-[#4b5563] ph-clock-counter-clockwise text-[26px]"></i>
                        <span class="text-[17px] tracking-tight">Riwayat</span>
                    </a>
                    <div class="h-[2px] bg-[#d1d5db] w-full max-w-[100px]"></div>
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
        <main class="flex-1 p-5 sm:p-8 lg:p-10 relative w-full">

            <!-- Header -->
            <header class="flex flex-col xl:flex-row justify-between items-start xl:items-center mb-6 w-full gap-5">
                <!-- Left: Title -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center w-full lg:w-auto gap-4 sm:gap-6">
                    <div class="flex items-center gap-3">
                        <button onclick="toggleSidebar()" class="lg:hidden w-11 h-11 rounded-lg border border-gray-300 bg-white shadow-sm flex items-center justify-center hover:bg-gray-50 transition flex-shrink-0">
                            <i class="ph-bold ph-list text-xl text-black"></i>
                        </button>
                        <div class="ml-2">
                            <h1 class="text-3xl md:text-4xl font-extrabold text-black mb-0.5 tracking-tight">Dashboard</h1>
                            <p class="text-[14px] md:text-[15px] text-gray-700 font-medium tracking-tight">Kelola semua quotation Anda dalam satu tempat</p>
                        </div>
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

            <!-- Summary Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 mb-8 mt-4">
                <!-- Card 1 -->
                <div
                    class="bg-white rounded-2xl p-5 shadow-[0_2px_10px_rgba(0,0,0,0.04)] flex items-center gap-5 border border-gray-100">
                    <div
                        class="w-[52px] h-[52px] rounded-xl bg-[#c5d5ca] flex items-center justify-center text-gray-600">
                        <i class="fa-solid fa-file-invoice text-2xl opacity-70"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-extrabold text-black leading-tight mb-0.5">2</h3>
                        <p class="text-gray-500 font-medium text-sm">Quotation aktif</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div
                    class="bg-white rounded-2xl p-5 shadow-[0_2px_10px_rgba(0,0,0,0.04)] flex items-center gap-5 border border-gray-100">
                    <div class="w-[52px] h-[52px] rounded-xl bg-[#fce5be] flex items-center justify-center">
                        <i class="fa-solid fa-hourglass-half text-2xl text-[#d97706] opacity-70"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-extrabold text-black leading-tight mb-0.5">0</h3>
                        <p class="text-gray-500 font-medium text-sm">Menunggu review</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div
                    class="bg-white rounded-2xl p-5 shadow-[0_2px_10px_rgba(0,0,0,0.04)] flex items-center gap-5 border border-gray-100">
                    <div class="w-[52px] h-[52px] rounded-xl bg-[#f6b4b4] flex items-center justify-center">
                        <i class="fa-solid fa-circle-check text-2xl text-[#dc2626] opacity-70"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-extrabold text-black leading-tight mb-0.5">1</h3>
                        <p class="text-gray-500 font-medium text-sm">Selesai</p>
                    </div>
                </div>
            </div>

            <!-- Pengumuman Card -->
            <div class="bg-[#4a40ce] rounded-xl p-6 lg:p-8 mb-8 text-white relative overflow-hidden shadow-sm">
                <div class="relative z-10 w-full md:w-3/4 lg:w-2/3">
                    <p class="text-[10px] md:text-xs font-bold uppercase tracking-wider mb-2 text-indigo-300">PENGUMUMAN
                    </p>
                    <h2 class="text-xl md:text-[26px] font-bold mb-4 md:mb-8 leading-tight tracking-tight">Ketuk untuk
                        melihat Pengumuman<br class="hidden sm:block">Pengadaan Barang hari ini</h2>
                    <p class="text-indigo-200 text-xs md:text-sm font-medium opacity-90">Pastikan semua dokumen
                        quotation telah dilengkapi sebelum batas waktu</p>
                </div>
                <!-- Decorative circle -->
                <div
                    class="hidden md:block absolute right-4 lg:right-12 top-1/2 transform -translate-y-1/2 w-32 h-32 lg:w-48 lg:h-48 bg-[#3c41cc] rounded-full mix-blend-multiply opacity-50">
                </div>
                <!-- Circle with Megaphone Icon -->
                <div
                    class="hidden md:flex absolute right-8 lg:right-16 top-1/2 transform -translate-y-1/2 w-24 h-24 lg:w-48 lg:h-48 bg-[#3b5bdb] rounded-full items-center justify-center opacity-90">
                    <i class="fa-solid fa-bullhorn text-white text-5xl lg:text-[100px] -rotate-12"></i>
                </div>
            </div>

            <!-- Daftar Quotation Header -->
            <div class="mb-6 mt-4">
                <div class="inline-flex items-center gap-3 bg-[#d7dfec] px-4 py-2.5 rounded-xl shadow-sm">
                    <div class="w-8 h-8 rounded-full border-[1.5px] border-black flex items-center justify-center">
                        <i class="fa-regular fa-file-lines text-black text-sm"></i>
                    </div>
                    <h2 class="text-lg font-bold text-black pr-2">Daftar Quotation</h2>
                </div>
            </div>

            <!-- Quotation Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-6 pb-20">
                <!-- Item 1 -->
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-[0_2px_10px_rgba(0,0,0,0.04)] border border-gray-100 flex flex-col transition-all duration-300 ease-in-out hover:-translate-y-1 hover:scale-[1.03] hover:shadow-xl hover:border-gray-300 cursor-pointer">
                    <div class="h-[120px] bg-[#e4e9e5] flex items-center justify-center relative overflow-hidden">
                        <i class="fa-solid fa-pen-nib text-[80px] text-[#609966] -rotate-12"></i>
                    </div>
                    <div class="p-5 flex flex-col flex-grow">
                        <h3 class="text-[15px] font-bold text-black mb-3 leading-tight tracking-tight mt-1">Pengadaan
                            Barang ATK</h3>

                        <div class="bg-[#faebca] border border-[#ecd5a0] rounded-md p-2.5 mb-4 shadow-sm w-full">
                            <p class="text-[9px] font-extrabold text-[#7a5712] mb-0.5 tracking-wider">BATAS WAKTU</p>
                            <p class="text-xs font-bold text-[#7a5712]">20 April 2026, 17.00 WIB</p>
                        </div>

                        <p id="timer1" class="text-[#d71919] font-extrabold text-[11px] mb-5"></p>
                        <a href="buat_quotation"
                            class="mt-auto block w-full bg-[#1e40ff] text-white text-center font-bold text-sm py-3 rounded-lg hover:bg-blue-700 transition">
                            Buka Quotation
                        </a>
                    </div>
                </div>

                <!-- Item 2 -->
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-[0_2px_10px_rgba(0,0,0,0.04)] border border-gray-100 flex flex-col transition-all duration-300 ease-in-out hover:-translate-y-1 hover:scale-[1.03] hover:shadow-xl hover:border-gray-300 cursor-pointer">
                    <div class="h-[120px] bg-[#fbf0dc] flex items-center justify-center relative overflow-hidden">
                        <i class="fa-solid fa-couch text-[85px] text-[#e5b83b]"></i>
                    </div>
                    <div class="p-5 flex flex-col flex-grow">
                        <h3 class="text-[15px] font-bold text-black mb-3 leading-tight tracking-tight mt-1">Pengadaan
                            Barang Furniture</h3>

                        <div class="bg-[#faebca] border border-[#ecd5a0] rounded-md p-2.5 mb-4 shadow-sm w-full">
                            <p class="text-[9px] font-extrabold text-[#7a5712] mb-0.5 tracking-wider">BATAS WAKTU</p>
                            <p class="text-xs font-bold text-[#7a5712]">12 April 2026, 17.00 WIB</p>
                        </div>

                        <p id="timer2" class="text-[#d71919] font-extrabold text-[11px] mb-5"></p>
                        <a href="buat_quotation.html"
                            class="mt-auto block w-full bg-[#1e40ff] text-white text-center font-bold text-sm py-3 rounded-lg hover:bg-blue-700 transition">
                            Buka Quotation
                        </a>
                    </div>
                </div>

                <!-- Item 3 -->
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-[0_2px_10px_rgba(0,0,0,0.04)] border border-gray-100 flex flex-col transition-all duration-300 ease-in-out hover:-translate-y-1 hover:scale-[1.03] hover:shadow-xl hover:border-gray-300 cursor-pointer">
                    <div class="h-[120px] bg-[#fbd4d4] flex items-center justify-center relative overflow-hidden">
                        <i class="fa-solid fa-mobile-screen text-[85px] text-[#ce3030]"></i>
                    </div>
                    <div class="p-5 flex flex-col flex-grow">
                        <h3 class="text-[15px] font-bold text-black mb-3 leading-tight tracking-tight mt-1">Pengadaan
                            Barang Elektronik</h3>

                        <div class="bg-[#faebca] border border-[#ecd5a0] rounded-md p-2.5 mb-4 shadow-sm w-full">
                            <p class="text-[9px] font-extrabold text-[#7a5712] mb-0.5 tracking-wider">BATAS WAKTU</p>
                            <p class="text-xs font-bold text-[#7a5712]">12 April 2026, 17.00 WIB</p>
                        </div>

                        <p class="text-[#d71919] font-extrabold text-[11px] mb-5">2d : 3h : 14m : 3s</p>

                        <a href="buat_quotation.html"
                            class="mt-auto block w-full bg-[#1e40ff] text-white text-center font-bold text-sm py-3 rounded-lg hover:bg-blue-700 transition">
                            Buka Quotation
                        </a>
                    </div>
                </div>
            </div>

        </main>
    </div>
    <script>
        const timers = [
            { id: 'timer1', deadline: '2026-04-20T17:00:00' },
            { id: 'timer2', deadline: '2026-04-12T17:00:00' },
            { id: 'timer3', deadline: '2026-04-12T17:00:00' },
        ];

        function updateTimers() {
            const now = new Date();

            timers.forEach(({ id, deadline }) => {
                const el = document.getElementById(id);
                if (!el) return;

                const diff = new Date(deadline) - now;

                if (diff <= 0) {
                    el.textContent = 'Waktu habis!';
                    el.classList.remove('text-[#d71919]');
                    el.classList.add('text-gray-400');
                    return;
                }

                const d = Math.floor(diff / (1000 * 60 * 60 * 24));
                const h = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const m = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                const s = Math.floor((diff % (1000 * 60)) / 1000);

                el.textContent = `${d}d : ${h}h : ${m}m : ${s}s`;
            });
        }

        updateTimers();
        setInterval(updateTimers, 1000);
    </script>

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

</html>
