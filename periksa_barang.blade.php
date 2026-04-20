<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Periksa Barang - 2026</title>
    <!-- Using Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            bg: '#f1f5fa',
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script><script src="https://unpkg.com/@phosphor-icons/web"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
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
            <img src="gambar/logo2.png" alt="Equogreen Logo" class="h-10 object-contain">
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
        <main class="flex-1 p-4 md:p-8 lg:p-10 relative w-full">

            <!-- Header Topbar -->
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
                        <a href="/batch_barang" class="relative text-black font-medium text-[16px] xl:text-[18px] pb-1 transition-colors duration-300 hover:text-[#8196ff] after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-[#8196ff] after:transition-all after:duration-300 hover:after:w-full">
                            Buat Batch
                        </a>
                        <a href="/periksa-barang" class="relative text-black font-medium text-[16px] xl:text-[18px] pb-1 transition-colors duration-300 hover:text-[#8196ff] border-b-2 border-[#768bd4]">
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

            <!-- Content Card -->
            <div class="w-full">
                <div class="bg-white rounded-lg border border-gray-400 p-6 shadow-sm w-full">
                    
                    <!-- Search Input -->
                    <div class="mb-4">
                        <input type="text" placeholder="Search"
                            class="w-full px-4 py-2 border border-black rounded-md outline-none focus:ring-1 focus:ring-black transition text-[15px]">
                    </div>

                    <!-- Dropdowns -->
                    <div class="flex flex-wrap items-center gap-4 mb-6">
                        <select class="px-3 py-2 border border-black rounded-md outline-none focus:ring-1 focus:ring-black bg-white min-w-[120px] shadow-sm appearance-none cursor-pointer text-[15px]">
                            <option>Batch 1</option>
                            <option>Batch 2</option>
                        </select>
                        <select class="px-3 py-2 border border-black rounded-md outline-none focus:ring-1 focus:ring-black bg-white min-w-[120px] shadow-sm appearance-none cursor-pointer text-[15px]">
                            <option>ATK</option>
                            <option>Lainnya</option>
                        </select>
                    </div>

                    <!-- Table -->
                    <div class="overflow-x-auto border border-black rounded-sm">
                        <table class="w-full border-collapse min-w-[600px] text-center">
                            <thead>
                                <tr class="bg-[#423ec7] text-white">
                                    <th class="py-4 px-4 font-normal text-[14px] border-r border-[#26245f] border-b border-black w-1/3">Nama Vendor</th>
                                    <th class="py-4 px-4 font-normal text-[14px] border-r border-[#26245f] border-b border-black w-1/3">Quotation</th>
                                    <th class="py-4 px-4 font-normal text-[14px] border-b border-black w-1/3">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Row 1 -->
                                <tr class="border-b border-black hover:bg-gray-50 transition text-[14px]">
                                    <td class="py-4 px-4 text-black border-r border-black">ATK Corp.</td>
                                    <td class="py-4 px-4 border-r border-black">
                                        <a href="#" onclick="openRincianModal(event)" class="text-[#435ae7] underline underline-offset-2 hover:text-blue-800">Cek</a>
                                    </td>
                                    <td class="py-4 px-4 text-center">
                                        <div class="flex items-center justify-center gap-5">
                                            <i class="ph ph-check text-[#4adb49] text-xl font-bold"></i>
                                            <i class="ph ph-x text-[#f52b2b] text-xl font-bold"></i>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Row 2 -->
                                <tr class="border-b border-black hover:bg-gray-50 transition text-[14px]">
                                    <td class="py-4 px-4 text-black border-r border-black">Pusat ATK</td>
                                    <td class="py-4 px-4 border-r border-black">
                                        <a href="#" onclick="openRincianModal(event)" class="text-[#435ae7] underline underline-offset-2 hover:text-blue-800">Cek</a>
                                    </td>
                                    <td class="py-4 px-4 text-center">
                                        <div class="flex items-center justify-center gap-5">
                                            <i class="ph ph-check text-[#4adb49] text-xl font-bold"></i>
                                            <i class="ph ph-x text-[#f52b2b] text-xl font-bold"></i>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Row 3 -->
                                <tr class="border-b border-black hover:bg-gray-50 transition text-[14px]">
                                    <td class="py-4 px-4 text-black border-r border-black">ATK Corner</td>
                                    <td class="py-4 px-4 border-r border-black">
                                        <a href="#" onclick="openRincianModal(event)" class="text-[#435ae7] underline underline-offset-2 hover:text-blue-800">Cek</a>
                                    </td>
                                    <td class="py-4 px-4 text-center">
                                        <div class="flex items-center justify-center gap-5">
                                            <i class="ph ph-check text-[#4adb49] text-xl font-bold"></i>
                                            <i class="ph ph-x text-[#f52b2b] text-xl font-bold"></i>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Row 4 -->
                                <tr class="border-b border-black hover:bg-gray-50 transition text-[14px]">
                                    <td class="py-4 px-4 text-black border-r border-black">Elektro Site</td>
                                    <td class="py-4 px-4 border-r border-black">
                                        <a href="#" onclick="openRincianModal(event)" class="text-[#435ae7] underline underline-offset-2 hover:text-blue-800">Cek</a>
                                    </td>
                                    <td class="py-4 px-4 text-center">
                                        <div class="flex items-center justify-center gap-5">
                                            <i class="ph ph-check text-[#4adb49] text-xl font-bold"></i>
                                            <i class="ph ph-x text-[#f52b2b] text-xl font-bold"></i>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Row 5 -->
                                <tr class="border-b border-black hover:bg-gray-50 transition text-[14px]">
                                    <td class="py-4 px-4 text-black border-r border-black">ATKKita</td>
                                    <td class="py-4 px-4 border-r border-black">
                                        <a href="#" onclick="openRincianModal(event)" class="text-[#435ae7] underline underline-offset-2 hover:text-blue-800">Cek</a>
                                    </td>
                                    <td class="py-4 px-4 text-center">
                                        <div class="flex items-center justify-center gap-5">
                                            <i class="ph ph-check text-[#4adb49] text-xl font-bold"></i>
                                            <i class="ph ph-x text-[#f52b2b] text-xl font-bold"></i>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Row 6 -->
                                <tr class="hover:bg-gray-50 transition text-[14px]">
                                    <td class="py-4 px-4 text-black border-r border-black">Fur&Ture</td>
                                    <td class="py-4 px-4 border-r border-black">
                                        <a href="#" onclick="openRincianModal(event)" class="text-[#435ae7] underline underline-offset-2 hover:text-blue-800">Cek</a>
                                    </td>
                                    <td class="py-4 px-4 text-center">
                                        <div class="flex items-center justify-center gap-5">
                                            <i class="ph ph-check text-[#4adb49] text-xl font-bold"></i>
                                            <i class="ph ph-x text-[#f52b2b] text-xl font-bold"></i>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        <!-- Modal Backdrop -->
        <div id="rincianModalBackdrop" class="fixed inset-0 bg-black/40 z-[60] hidden opacity-0 transition-opacity duration-300" onclick="closeRincianModal()"></div>
        
        <!-- Modal Container -->
        <div id="rincianModal" class="fixed inset-0 z-[70] hidden items-center justify-center pointer-events-none px-4 py-6 sm:py-10">
            <div class="bg-white rounded-2xl shadow-xl w-full max-w-[1200px] max-h-full flex flex-col pointer-events-auto transform scale-95 opacity-0 transition-all duration-300 overflow-hidden" id="rincianModalContent">
                
                <!-- Header Modal -->
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-6 sm:px-8 py-5 border-b border-gray-100 gap-4">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 rounded-full bg-[#f0e6ff] text-[#3833a6] font-bold flex items-center justify-center text-xl">
                            AC
                        </div>
                        <div>
                            <h2 class="text-[22px] font-bold text-black leading-tight">ATK Corp.</h2>
                            <p class="text-[14px] text-gray-400 mt-1">QT-2026-0318 &middot; Batch 1 &middot; ATK</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 self-end sm:self-auto">
                      
                        <button onclick="closeRincianModal()" class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 hover:text-gray-700 hover:bg-gray-100 transition">
                            <i class="ph ph-x text-lg"></i>
                        </button>
                    </div>
                </div>

                <!-- Modal Content scrollable -->
                <div class="flex-1 overflow-y-auto px-6 sm:px-8 py-8 custom-scrollbar">
                    <!-- Info Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-y-7 gap-x-8 mb-8 pb-8 border-b border-gray-100">
                        <div>
                            <p class="text-[14px] text-gray-400 mb-1.5">Kontak PIC</p>
                            <p class="text-[16px] text-black font-medium">Budi Santoso</p>
                        </div>
                        <div>
                            <p class="text-[14px] text-gray-400 mb-1.5">Telepon</p>
                            <p class="text-[16px] text-black font-medium">0812-3456-7890</p>
                        </div>
                        <div>
                            <p class="text-[14px] text-gray-400 mb-1.5">Email</p>
                            <p class="text-[16px] text-black font-medium">budi@atkcorp.co.id</p>
                        </div>
                        
                        <div>
                            <p class="text-[14px] text-gray-400 mb-1.5">Tgl Penawaran</p>
                            <p class="text-[16px] text-black font-medium">28 Mar 2026</p>
                        </div>
                       
                        
                    </div>

                    <!-- Section Title -->
                    <h3 class="text-[14px] font-bold text-gray-400 uppercase tracking-widest mb-4">Rincian Item</h3>

                    <!-- Table Excel Columns -->
                    <div class="overflow-x-auto w-full border-2 border-gray-250 rounded-lg">
                        <table class="w-full text-left whitespace-nowrap border-collapse">
                            <thead class="bg-[#423ec7] text-white">
                                <tr>
                                    <th class="py-3.5 px-4 font-semibold text-[13px] border-r-2 border-[#2825a8]">Coll No.</th>
                                    <th class="py-3.5 px-4 font-semibold text-[13px] border-r-2 border-[#2825a8]">RFQ No.</th>
                                    <th class="py-3.5 px-4 font-semibold text-[13px] border-r-2 border-[#2825a8]">Vendor</th>
                                    <th class="py-3.5 px-4 font-semibold text-[13px] border-r-2 border-[#2825a8]">No. Item</th>
                                    <th class="py-3.5 px-4 font-semibold text-[13px] border-r-2 border-[#2825a8]">Material No.</th>
                                    <th class="py-3.5 px-4 font-semibold text-[13px] border-r-2 border-[#2825a8]">Description</th>
                                    <th class="py-3.5 px-4 font-semibold text-[13px] text-center border-r-2 border-[#2825a8]">Qty</th>
                                    <th class="py-3.5 px-4 font-semibold text-[13px] text-center border-r-2 border-[#2825a8]">UoM</th>
                                    <th class="py-3.5 px-4 font-semibold text-[13px] text-center border-r-2 border-[#2825a8]">Currency</th>
                                    <th class="py-3.5 px-4 font-semibold text-[13px] text-right border-r-2 border-[#2825a8]">Net Price</th>
                                    <th class="py-3.5 px-4 font-semibold text-[13px] border-r-2 border-[#2825a8]">Incoterm</th>
                                    <th class="py-3.5 px-4 font-semibold text-[13px] border-r-2 border-[#2825a8]">Destination</th>
                                    <th class="py-3.5 px-4 font-semibold text-[13px] border-r-2 border-[#2825a8]">Remark 1</th>
                                    <th class="py-3.5 px-4 font-semibold text-[13px] border-r-2 border-[#2825a8]">Remark 2</th>
                                    <th class="py-3.5 px-4 font-semibold text-[13px] text-center border-r-2 border-[#2825a8]">Lead Time(Weeks)</th>
                                    <th class="py-3.5 px-4 font-semibold text-[13px] border-r-2 border-[#2825a8]">Payment Term</th>
                                    <th class="py-3.5 px-4 font-semibold text-[13px]">Quotation Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Row 1 -->
                                <tr class="border-b-2 border-gray-400 bg-white text-[13.5px]">
                                    <td class="py-3.5 px-4 text-gray-800 border-r-2 border-gray-400">EMS11</td>
                                    <td class="py-3.5 px-4 text-gray-800 border-r-2 border-gray-400">6000010111</td>
                                    <td class="py-3.5 px-4 text-gray-800 border-r-2 border-gray-400">16000501</td>
                                    <td class="py-3.5 px-4 text-gray-800 border-r-2 border-gray-400">10</td>
                                    <td class="py-3.5 px-4 text-gray-800 border-r-2 border-gray-400">13005620</td>
                                    <td class="py-3.5 px-4 text-gray-800 border-r-2 border-gray-400">MONITOR, COLOR, LCD 20"/21", WIDESCREEN, AC100-240V, 50/60 Hz</td>
                                    <td class="py-3.5 px-4 text-gray-800 text-center border-r-2 border-gray-400">2.000</td>
                                    <td class="py-3.5 px-4 text-gray-800 text-center border-r-2 border-gray-400">UNT</td>
                                    <td class="py-3.5 px-4 text-gray-400 border-r-2 border-gray-400">—</td>
                                    <td class="py-3.5 px-4 text-gray-800 text-right border-r-2 border-gray-400">0.00</td>
                                    <td class="py-3.5 px-4 text-gray-400 border-r-2 border-gray-400">—</td>
                                    <td class="py-3.5 px-4 text-gray-400 border-r-2 border-gray-400">—</td>
                                    <td class="py-3.5 px-4 text-gray-400 border-r-2 border-gray-400">—</td>
                                    <td class="py-3.5 px-4 text-gray-400 border-r-2 border-gray-400">—</td>
                                    <td class="py-3.5 px-4 text-gray-400 text-center border-r-2 border-gray-400">—</td>
                                    <td class="py-3.5 px-4 text-gray-400 border-r-2 border-gray-400">—</td>
                                    <td class="py-3.5 px-4 text-gray-400">—</td>
                                </tr>
                                <!-- Row 2 -->
                                <tr class="border-b-2 border-gray-400 bg-[#f8f9ff] text-[13.5px]">
                                    <td class="py-3.5 px-4 text-gray-800 border-r-2 border-gray-400">EMS11</td>
                                    <td class="py-3.5 px-4 text-gray-800 border-r-2 border-gray-400">6000010111</td>
                                    <td class="py-3.5 px-4 text-gray-800 border-r-2 border-gray-400">16000501</td>
                                    <td class="py-3.5 px-4 text-gray-800 border-r-2 border-gray-400">20</td>
                                    <td class="py-3.5 px-4 text-gray-800 border-r-2 border-gray-400">13005625</td>
                                    <td class="py-3.5 px-4 text-gray-800 border-r-2 border-gray-400">KEYBOARD AND MOUSE WIRELESS COMBO</td>
                                    <td class="py-3.5 px-4 text-gray-800 text-center border-r-2 border-gray-400">5.000</td>
                                    <td class="py-3.5 px-4 text-gray-800 text-center border-r-2 border-gray-400">SET</td>
                                    <td class="py-3.5 px-4 text-gray-400 border-r-2 border-gray-400">—</td>
                                    <td class="py-3.5 px-4 text-gray-800 text-right border-r-2 border-gray-400">0.00</td>
                                    <td class="py-3.5 px-4 text-gray-400 border-r-2 border-gray-400">—</td>
                                    <td class="py-3.5 px-4 text-gray-400 border-r-2 border-gray-400">—</td>
                                    <td class="py-3.5 px-4 text-gray-400 border-r-2 border-gray-400">—</td>
                                    <td class="py-3.5 px-4 text-gray-400 border-r-2 border-gray-400">—</td>
                                    <td class="py-3.5 px-4 text-gray-400 text-center border-r-2 border-gray-400">—</td>
                                    <td class="py-3.5 px-4 text-gray-400 border-r-2 border-gray-400">—</td>
                                    <td class="py-3.5 px-4 text-gray-400">—</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        </main>
    </div>

    <style>
        .custom-scrollbar::-webkit-scrollbar {
            height: 8px;
            width: 8px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1; 
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #c1c1c1; 
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8; 
        }
    </style>
    <script>
        function openRincianModal(e) {
            if(e) e.preventDefault();
            const backdrop = document.getElementById('rincianModalBackdrop');
            const modal = document.getElementById('rincianModal');
            const content = document.getElementById('rincianModalContent');
            
            backdrop.classList.remove('hidden');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            
            // force reflow
            void modal.offsetWidth;
            
            backdrop.classList.remove('opacity-0');
            content.classList.remove('opacity-0', 'scale-95');
        }

        function closeRincianModal() {
            const backdrop = document.getElementById('rincianModalBackdrop');
            const modal = document.getElementById('rincianModal');
            const content = document.getElementById('rincianModalContent');
            
            backdrop.classList.add('opacity-0');
            content.classList.add('opacity-0', 'scale-95');
            
            setTimeout(() => {
                backdrop.classList.add('hidden');
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }, 300);
        }
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
