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
        body {
            font-family: 'Inter', sans-serif;
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
                    <a href="batch_barang.html" class="flex items-center gap-3 text-black font-bold mb-2">
                        <i class="fa-solid fa-database text-[24px]"></i>
                        <span class="text-[18px]">Periksa Barang</span>
                    </a>
                    <div class="h-[2px] bg-gray-400 w-[150px]"></div>
                </div>
                <div>
                    <a href="#" class="flex items-center gap-3 text-gray-600 font-bold mb-2">
                        <div class="relative">
                            <i class="fa-regular fa-bell text-[24px]"></i>
                            <i
                                class="fa-solid fa-circle-plus text-[12px] bg-white rounded-full absolute -bottom-1 -right-1 text-black"></i>
                        </div>
                        <span class="text-[18px]">Kelola Notifikasi</span>
                    </a>
                    <div class="h-[2px] bg-gray-300 w-[180px]"></div>
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
                        <div class="relative w-full sm:w-[240px]">
                            <select
                                class="w-full appearance-none border border-gray-400 bg-white rounded-lg px-4 py-3 text-black text-[15px] outline-none hover:border-black transition cursor-pointer">
                                <option>Kategori</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
                                <i class="fa-solid fa-chevron-down text-[13px]"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Description Topic -->
                    <div class="flex items-start gap-4 mb-3">
                        <i class="fa-solid fa-box text-[32px] text-black"></i>
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
</script>
</body>

</html>