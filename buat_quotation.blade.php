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
    <style>
        body { font-family: 'Inter', sans-serif; }
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
                    <a href="dashboard_vendor.html" class="flex items-center gap-3 text-black font-bold mb-2">
                        <i class="fa-solid fa-border-all text-[26px] text-gray-700"></i>
                        <span class="text-[20px]">Dashboard</span>
                    </a>
                    <div class="h-[2px] bg-gray-400 w-[155px]"></div>
                </div>
                <div>
                    <a href="#" class="flex items-center gap-3 text-gray-600 font-bold mb-2">
                        <i class="fa-solid fa-clock-rotate-left text-[24px]"></i>
                        <span class="text-[20px]">Riwayat</span>
                    </a>
                    <div class="h-[2px] bg-gray-300 w-[130px]"></div>
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
                    <a href="dashboard_vendor.html" class="w-10 h-10 rounded-full border border-black flex items-center justify-center hover:bg-gray-200 transition">
                        <i class="fa-solid fa-arrow-left text-xl text-black"></i>
                    </a>
                    <div>
                        <h1 class="text-[28px] font-bold text-black leading-tight mb-0.5">Buat Quotation</h1>
                        <p class="text-[15px] text-gray-800">Isi quotation sesuai ketentuan yang berlaku</p>
                    </div>
                </div>

                <!-- Right: User Actions -->
                <div class="flex items-center gap-4">
                    <button class="w-11 h-11 rounded-full border border-gray-400 bg-transparent flex items-center justify-center hover:bg-gray-100 transition">
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

</body>
</html>
