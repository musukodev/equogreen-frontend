<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Quotation - Equogreen</title>
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
        body { font-family: 'Inter', sans-serif; }
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
                    <a href="dashboard_vendor.html" class="flex items-center gap-3 text-[#4b5563] font-bold mb-[10px] hover:text-black transition">
                        <i class="ph-bold text-[#4b5563] ph-squares-four text-[26px]"></i>
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
        <main class="flex-1 p-4 md:p-10 relative w-full">
            
            <!-- Header -->
            <header class="flex flex-col xl:flex-row justify-between items-start xl:items-center mb-6 w-full gap-5">
                <!-- Left: Title & Back & Tabs -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center w-full lg:w-auto gap-4 sm:gap-0">
                    <div class="flex items-center">
                        <button onclick="toggleSidebar()" class="lg:hidden w-11 h-11 rounded-lg border border-gray-300 bg-white shadow-sm flex items-center justify-center hover:bg-gray-50 transition mr-4 flex-shrink-0">
                            <i class="ph-bold ph-list text-xl text-black"></i>
                        </button>
                        <a href="dashboard_vendor.html" class="w-10 h-10 rounded-full border border-black flex items-center justify-center hover:bg-gray-200 transition">
                            <i class="ph-bold ph-arrow-left text-xl text-black"></i>
                        </a>
                        <div class="ml-5">
                            <h1 class="text-[28px] md:text-3xl font-bold text-black leading-tight mb-0.5">Buat Quotation</h1>
                            <p class="text-[15px] text-gray-800">Isi quotation sesuai ketentuan yang berlaku</p>
                        </div>
                    </div>
                </div>

                <!-- Right: User Actions -->
                <div class="flex items-center gap-4 align-middle">
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

            <!-- Form Workspace -->
            <div class="w-full">
                
                <!-- Topic Card -->
                <div class="bg-white rounded-xl border border-gray-400 shadow-sm p-4 mb-6 flex flex-col sm:flex-row items-start sm:items-center gap-3 md:gap-4">
                    <div class="w-[40px] h-[40px] md:w-[50px] md:h-[50px] rounded-full bg-[#4a40ce] flex items-center justify-center flex-shrink-0">
                        <i class="fa-solid fa-box-open text-white text-xl"></i>
                    </div>
                    <div>
                        <h2 class="text-lg font-bold text-black mb-0.5">Pengadaan Barang ATK</h2>
                        <p class="text-gray-500 text-[15px]">ATK</p>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="bg-white rounded-xl border border-gray-400 p-6 shadow-sm flex flex-col">
                    
                    <!-- Deadline Box -->
                    <div class="bg-[#ebeaef] rounded-md px-4 pt-3 pb-1 mb-6">
                        <p class="text-black text-[13px] md:text-[15px]"><span class="font-bold">Tenggat Waktu:</span> Selasa, 12 Februari 2026, 11:20</p>
                        <div class="h-px bg-gray-500 w-full mt-2.5"></div>
                    </div>

                    <!-- Description Area -->
                    <div class="flex items-start gap-4 mb-6 pt-1">
                        <!-- Icon outline box -->
                        <i class="fa-solid fa-box text-[24px] md:text-[28px] text-black"></i>
                        <div>
                            <h3 class="text-[15px] md:text-[16px] font-bold text-black mb-0.5">Deskripsi Spesifikasi Barang</h3>
                            <p class="text-[14px] text-gray-500">Perhatikan spesifikasi barang dengan baik</p>
                        </div>
                    </div>

                    <!-- Data Table -->
                    <div class="w-full mb-8 overflow-x-auto">
                        <table class="w-full border-collapse border border-gray-400 min-w-[500px]">
                            <thead>
                                <tr class="bg-[#3a3fe0] text-white text-[15px]">
                                    <th class="border border-gray-400 py-2.5 font-normal w-1/3 text-center">Nama Barang</th>
                                    <th class="border border-gray-400 py-2.5 font-normal w-1/3 text-center">Spesifikasi detail</th>
                                    <th class="border border-gray-400 py-2.5 font-normal w-1/3 text-center">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-400 h-[40px]"></td>
                                    <td class="border border-gray-400 h-[40px]"></td>
                                    <td class="border border-gray-400 h-[40px]"></td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-400 h-[40px]"></td>
                                    <td class="border border-gray-400 h-[40px]"></td>
                                    <td class="border border-gray-400 h-[40px]"></td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-400 h-[40px]"></td>
                                    <td class="border border-gray-400 h-[40px]"></td>
                                    <td class="border border-gray-400 h-[40px]"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Action Buttons -->
                    <div class="space-y-3 w-full">
                        <button type="button" class="w-full bg-black text-white text-center text-[15px] py-3.5 rounded-lg hover:bg-gray-800 transition">
                            Download Template
                        </button>
                        <button type="button" class="w-full bg-black text-white text-center text-[15px] py-3.5 rounded-lg hover:bg-gray-800 transition">
                            Upload File
                        </button>
                        <div class="w-full pt-1 pb-1">
                            <div class="border-[1.5px] border-gray-400 rounded-lg py-7 flex flex-col items-center justify-center cursor-pointer hover:bg-gray-50 transition w-full">
                                <i class="fa-solid fa-arrow-up-from-bracket text-[#a0a0a0] mb-2 text-lg"></i>
                                <span class="text-[#a0a0a0] text-[15px]">Upload File

            
                                </span>
                            </div>
                            <p class="text-[#a0a0a0] text-[13px] mt-1.5 ml-1">Accepted files: All file types</p>
                        </div>
                        <button type="submit" class="w-full bg-[#1e40ff] text-white text-center text-[15px] py-3.5 rounded-lg hover:bg-blue-700 transition relative">
                            Kirim
                        </button>
                    </div>

                    <!-- Footer Link -->
                    <div class="mt-5 text-[14px] text-black">
                        Tata cara quotation <a href="#" class="text-[#1e40ff]">Unduh</a>
                    </div>
                </div>

            </div>

        </main>
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
</html>
