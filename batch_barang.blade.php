<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Periksa Barang - Equogreen</title>
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
                    <a href="#" class="flex items-center gap-3 text-gray-500 font-bold mb-2">
                        <i class="fa-solid fa-border-all text-[24px]"></i>
                        <span class="text-[18px]">Dashboard</span>
                    </a>
                    <div class="h-[2px] bg-gray-300 w-[140px]"></div>
                </div>
                <div>
                    <a href="periksa_barang.html" class="flex items-center gap-3 text-black font-bold mb-2">
                        <i class="fa-solid fa-database text-[24px]"></i>
                        <span class="text-[18px]">Periksa Barang</span>
                    </a>
                    <div class="h-[2px] bg-gray-400 w-[150px]"></div>
                </div>
                <div>
                    <a href="#" class="flex items-center gap-3 text-gray-500 font-bold mb-2">
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
                <a href="#" class="flex items-center gap-3 text-gray-500 font-bold">
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
                <!-- Left: Title & Back & Tabs -->
                <div class="flex items-center">
                    <a href="#"
                        class="w-10 h-10 rounded-full border border-black flex items-center justify-center hover:bg-gray-200 transition">
                        <i class="fa-solid fa-arrow-left text-xl text-black"></i>
                    </a>
                    <h1 class="text-[32px] font-bold text-black ml-5">2026</h1>

                    <div class="flex items-center gap-6 ml-10 mt-1">

                        <a href="#"
                            class="relative text-black font-medium text-[16px] xl:text-[18px] pb-1
       transition-colors duration-300
       hover:text-[#8196ff]

       after:content-[''] after:absolute after:left-0 after:bottom-0 
       after:w-0 after:h-[2px] after:bg-[#8196ff]
       after:transition-all after:duration-300
       hover:after:w-full">

                            Buat Batch
                        </a>

                        <a href="#"
                            class="relative text-black font-medium text-[16px] xl:text-[18px] pb-1
       transition-colors duration-300
       hover:text-[#8196ff]

       after:content-[''] after:absolute after:left-0 after:bottom-0 
       after:w-0 after:h-[2px] after:bg-[#8196ff]
       after:transition-all after:duration-300
       hover:after:w-full">

                            Periksa Barang
                        </a>

                    </div>
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
                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">

                        <!-- Batch 1 -->
                        <div
                            onclick="window.location.href='tambah_barang'" class="group border border-gray-400 rounded-lg flex flex-col bg-white overflow-hidden shadow-sm transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg cursor-pointer">
                            <div
                                class="bg-[#fdf3df] py-4 border-b border-gray-400 text-center cursor-pointer hover:brightness-95 transition">
                                <h2 class="text-lg font-bold text-black">Batch 1</h2>
                            </div>
                            <div class="p-3">
                                <div class="bg-[#faebca] rounded-md p-2 w-full text-left mb-3">
                                    <p class="text-[9px] font-bold text-green-800 leading-tight">BATAS WAKTU</p>
                                    <p class="text-[12px] font-bold text-black mt-0.5">12 April 2026, 17.00 WIB</p>
                                </div>
                                <div class="flex items-center justify-end gap-2 text-gray-600 text-[20px]">
                                    <button class="hover:text-black transition"><i
                                            class="fa-regular fa-pen-to-square"></i></button>
                                    <button class="hover:text-red-500 transition"><i
                                            class="fa-regular fa-trash-can"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Batch 2 -->
                        <div
                            class="border border-gray-400 rounded-lg flex flex-col bg-white overflow-hidden shadow-sm transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg cursor-pointer">
                            <div class="bg-[#e4efe0] py-4 border-b border-gray-400 text-center">
                                <h2 class="text-lg font-bold text-black">Batch 2</h2>
                            </div>
                            <div class="p-3">
                                <div class="bg-[#faebca] rounded-md p-2 w-full text-left mb-3">
                                    <p class="text-[9px] font-bold text-green-800 leading-tight">BATAS WAKTU</p>
                                    <p class="text-[12px] font-bold text-black mt-0.5">13 Mei 2026, 12.30 WIB</p>
                                </div>
                                <div class="flex items-center justify-end gap-2 text-gray-600 text-[20px]">
                                    <button class="hover:text-black transition"><i
                                            class="fa-regular fa-pen-to-square"></i></button>
                                    <button class="hover:text-red-500 transition"><i
                                            class="fa-regular fa-trash-can"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Batch 3 -->
                        <div
                            class="border border-gray-400 rounded-lg flex flex-col bg-white overflow-hidden shadow-sm transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg cursor-pointer">
                            <div class="bg-[#fce1e1] py-4 border-b border-gray-400 text-center">
                                <h2 class="text-lg font-bold text-black">Batch 3</h2>
                            </div>
                            <div class="p-3">
                                <div class="bg-[#faebca] rounded-md p-2 w-full text-left mb-3">
                                    <p class="text-[9px] font-bold text-green-800 leading-tight">BATAS WAKTU</p>
                                    <p class="text-[12px] font-bold text-black mt-0.5">28 Mei 2026, 18.00 WIB</p>
                                </div>
                                <div class="flex items-center justify-end gap-2 text-gray-600 text-[20px]">
                                    <button class="hover:text-black transition"><i
                                            class="fa-regular fa-pen-to-square"></i></button>
                                    <button class="hover:text-red-500 transition"><i
                                            class="fa-regular fa-trash-can"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Batch 4 -->
                        <div
                            class="group border border-gray-400 rounded-lg flex flex-col bg-white overflow-hidden shadow-sm transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg cursor-pointer">
                            <div class="bg-[#fdf3df] py-4 border-b border-gray-400 text-center">
                                <h2 class="text-lg font-bold text-black">Batch 4</h2>
                            </div>
                            <div class="p-3">
                                <div class="bg-[#faebca] rounded-md p-2 w-full text-left mb-3">
                                    <p class="text-[9px] font-bold text-green-800 leading-tight">BATAS WAKTU</p>
                                    <p class="text-[12px] font-bold text-black mt-0.5">26 Juni 2026, 16.00 WIB</p>
                                </div>
                                <div class="flex items-center justify-end gap-2 text-gray-600 text-[20px]">
                                    <button class="hover:text-black transition"><i
                                            class="fa-regular fa-pen-to-square"></i></button>
                                    <button class="hover:text-red-500 transition"><i
                                            class="fa-regular fa-trash-can"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Batch 5 -->
                        <div
                            class="border border-gray-400 rounded-lg flex flex-col bg-white overflow-hidden shadow-sm transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg cursor-pointer">
                            <div class="bg-[#e4efe0] py-4 border-b border-gray-400 text-center">
                                <h2 class="text-lg font-bold text-black">Batch 5</h2>
                            </div>
                            <div class="p-3">
                                <div class="bg-[#faebca] rounded-md p-2 w-full text-left mb-3">
                                    <p class="text-[9px] font-bold text-green-800 leading-tight">BATAS WAKTU</p>
                                    <p class="text-[12px] font-bold text-black mt-0.5">28 Juni 2026, 12.45 WIB</p>
                                </div>
                                <div class="flex items-center justify-end gap-2 text-gray-600 text-[20px]">
                                    <button class="hover:text-black transition"><i
                                            class="fa-regular fa-pen-to-square"></i></button>
                                    <button class="hover:text-red-500 transition"><i
                                            class="fa-regular fa-trash-can"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Batch 6 -->
                        <div
                            class="border border-gray-400 rounded-lg flex flex-col bg-white overflow-hidden shadow-sm transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg cursor-pointer">
                            <div class="bg-[#fce1e1] py-4 border-b border-gray-400 text-center">
                                <h2 class="text-lg font-bold text-black">Batch 6</h2>
                            </div>
                            <div class="p-3">
                                <div class="bg-[#faebca] rounded-md p-2 w-full text-left mb-3">
                                    <p class="text-[9px] font-bold text-green-800 leading-tight">BATAS WAKTU</p>
                                    <p class="text-[12px] font-bold text-black mt-0.5">28 Juli 2026, 20.00 WIB</p>
                                </div>
                                <div class="flex items-center justify-end gap-2 text-gray-600 text-[20px]">
                                    <button class="hover:text-black transition"><i
                                            class="fa-regular fa-pen-to-square"></i></button>
                                    <button class="hover:text-red-500 transition"><i
                                            class="fa-regular fa-trash-can"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Batch 7 -->
                        <div
                            class="border border-gray-400 rounded-lg flex flex-col bg-white overflow-hidden shadow-sm transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg cursor-pointer">
                            <div class="bg-[#fdf3df] py-4 border-b border-gray-400 text-center">
                                <h2 class="text-lg font-bold text-black">Batch 7</h2>
                            </div>
                            <div class="p-3">
                                <div class="bg-[#faebca] rounded-md p-2 w-full text-left mb-3">
                                    <p class="text-[9px] font-bold text-green-800 leading-tight">BATAS WAKTU</p>
                                    <p class="text-[12px] font-bold text-black mt-0.5">2 Agustus 2026, 17.00 WIB</p>
                                </div>
                                <div class="flex items-center justify-end gap-2 text-gray-600 text-[20px]">
                                    <button class="hover:text-black transition"><i
                                            class="fa-regular fa-pen-to-square"></i></button>
                                    <button class="hover:text-red-500 transition"><i
                                            class="fa-regular fa-trash-can"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Batch 8 -->
                        <div
                            class="border border-gray-400 rounded-lg flex flex-col bg-white overflow-hidden shadow-sm transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg cursor-pointer">
                            <div class="bg-[#e4efe0] py-4 border-b border-gray-400 text-center">
                                <h2 class="text-lg font-bold text-black">Batch 8</h2>
                            </div>
                            <div class="p-3">
                                <div class="bg-[#faebca] rounded-md p-2 w-full text-left mb-3">
                                    <p class="text-[9px] font-bold text-green-800 leading-tight">BATAS WAKTU</p>
                                    <p class="text-[12px] font-bold text-black mt-0.5">13 Agustus 2026, 13.30 WIB</p>
                                </div>
                                <div class="flex items-center justify-end gap-2 text-gray-600 text-[20px]">
                                    <button class="hover:text-black transition"><i
                                            class="fa-regular fa-pen-to-square"></i></button>
                                    <button class="hover:text-red-500 transition"><i
                                            class="fa-regular fa-trash-can"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Batch 9 -->
                        <div
                            class="border border-gray-400 rounded-lg flex flex-col bg-white overflow-hidden shadow-sm transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg cursor-pointer">
                            <div class="bg-[#fce1e1] py-4 border-b border-gray-400 text-center">
                                <h2 class="text-lg font-bold text-black">Batch 9</h2>
                            </div>
                            <div class="p-3">
                                <div class="bg-[#faebca] rounded-md p-2 w-full text-left mb-3">
                                    <p class="text-[9px] font-bold text-green-800 leading-tight">BATAS WAKTU</p>
                                    <p class="text-[12px] font-bold text-black mt-0.5">28 September 2026, 12.00 WIB</p>
                                </div>
                                <div class="flex items-center justify-end gap-2 text-gray-600 text-[20px]">
                                    <button class="hover:text-black transition"><i
                                            class="fa-regular fa-pen-to-square"></i></button>
                                    <button class="hover:text-red-500 transition"><i
                                            class="fa-regular fa-trash-can"></i></button>
                                </div>
                            </div>
                        </div>

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
                <button
                    class="w-full bg-[#1e40ff] hover:bg-blue-700 text-white font-normal text-[15px] py-2.5 rounded shadow transition">
                    Simpan
                </button>

            </div>
        </div>
    </div>

</body>
<script>
    function openModal() {
        const modal = document.getElementById('tambahBatchModal');
        const box = document.getElementById('modalBox');

        modal.classList.remove('pointer-events-none');
        modal.classList.remove('opacity-0');
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
</script>

</html>