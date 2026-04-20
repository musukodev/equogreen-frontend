<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Equogreen</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="m-0 p-0 font-inter bg-gray-50 text-slate-900 antialiased">
    <div class="flex min-h-screen w-full">
        <!-- Left Side: Login Form -->
        <div class="flex-1 basis-1/2 max-w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md -mt-12">
                <!-- Header -->
                <div class="mb-6">
                    <h1 class="text-2xl font-bold mb-2 text-black">Selamat datang!</h1>
                    <p class="text-base text-slate-900">Masukkan data sesuai ketentuan</p>
                </div>

                <!-- Login Card -->
                <div class="bg-white rounded-lg border border-slate-200 overflow-hidden shadow-sm">
                    <!-- Card Header -->
                    <div class="flex items-center gap-3 px-5 py-4 border-b border-slate-200 font-medium text-sm">
                        <i class="ph-fill ph-user-circle text-2xl text-black"></i>
                        <span>Login</span>
                    </div>
                    
                    <!-- Form -->
                    <form class="p-6" action="dashboard.html">
                        <!-- Email Field -->
                        <div class="mb-5">
                            <label class="block text-base font-normal mb-2 text-slate-900">Email</label>
                            <input 
                                type="email" 
                                class="w-full h-11 border border-slate-400 rounded-md px-3.5 font-normal text-sm placeholder-slate-400 focus:outline-none focus:border-blue-600 transition-colors" 
                                placeholder="Masukkan alamat email Anda" 
                                required
                            >
                        </div>
                        
                        <!-- Password Field -->
                        <div class="mb-5">
                            <label class="block text-base font-normal mb-2 text-slate-900">Password</label>
                            <input 
                                type="password" 
                                class="w-full h-11 border border-slate-400 rounded-md px-3.5 font-normal text-sm placeholder-slate-400 focus:outline-none focus:border-blue-600 transition-colors" 
                                placeholder="Masukkan password Anda" 
                                required
                            >
                        </div>
                        
                        <!-- Forgot Password -->
                        <div class="text-right -mt-2.5 mb-6">
                            <a href="#" class="text-blue-600 text-sm no-underline hover:underline">Lupa password?</a>
                        </div>
                        
                        <!-- Login Button -->
                        <button 
                            type="submit" 
                            class="w-full h-11 bg-blue-600 text-white border-none rounded-md text-base font-medium cursor-pointer hover:bg-blue-700 transition-colors mb-6">
                            <a href="/batch_barang">Log In</a>
                        </button>
                        
                        <!-- Register Link -->
                        <div class="text-center text-sm text-slate-900">
                            Belum punya akun? 
                            <a href="/registrasi" class="text-blue-600 no-underline hover:underline">Registrasi.</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Right Side: Image cover -->
        <div class="flex-1 basis-1/2 max-w-1/2 flex bg-indigo-50">
            <img src="gambar/login.png" alt="Login Banner" class="w-full h-full object-cover">
        </div>
    </div>
</body>
</html>