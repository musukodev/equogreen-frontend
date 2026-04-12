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
    <link rel="stylesheet" href="login.css">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', sans-serif;
    background-color: #f2f5fd; /* Light blueish grey matching the image */
    color: #111;
}

.login-container {
    display: flex;
    min-height: 100vh;
    width: 100%;
}

.login-left {
    flex: 1;
    flex-basis: 50%;
    max-width: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2rem;
}

.login-right {
    flex: 1;
    flex-basis: 50%;
    max-width: 50%;
    display: flex;
    background-color: #e0e7ff;
}

.banner-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.login-content {
    width: 100%;
    max-width: 440px;
    margin-top: -50px; /* Slight optical adjustment to center it nicely */
}

.login-header {
    margin-bottom: 24px;
}

.login-header h1 {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 8px;
    color: #000;
}

.login-header p {
    font-size: 16px;
    color: #111;
}

.login-card {
    background-color: #ffffff;
    border-radius: 8px;
    border: 1px solid #c8ccd6;
    overflow: hidden;
}

.card-header {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 16px 20px;
    border-bottom: 1px solid #c8ccd6;
    font-weight: 500;
    font-size: 15px;
}

.card-header i {
    font-size: 26px;
    color: #000;
}

.card-body {
    padding: 24px 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-size: 16px;
    font-weight: 400;
    margin-bottom: 8px;
    color: #111;
}

.form-control {
    width: 100%;
    height: 46px;
    border: 1px solid #6b7280;
    border-radius: 6px;
    padding: 0 14px;
    font-family: inherit;
    font-size: 14px;
    outline: none;
    transition: border-color 0.2s;
}

.form-control::placeholder {
    color: #9ca3af;
}

.form-control:focus {
    border-color: #0436ff;
}

.forgot-password {
    text-align: right;
    margin-top: -10px;
    margin-bottom: 20px;
}

.forgot-password a {
    color: #0436ff;
    text-decoration: none;
    font-size: 14px;
}

.forgot-password a:hover {
    text-decoration: underline;
}

.btn-login {
    width: 100%;
    height: 46px;
    background-color: #0036fc;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.2s;
    margin-bottom: 24px;
}

.btn-login:hover {
    background-color: #002be0;
}

.register-link {
    text-align: center;
    font-size: 14px;
    color: #111;
}

.register-link a {
    color: #0436ff;
    text-decoration: none;
}

.register-link a:hover {
    text-decoration: underline;
}

@media (max-width: 900px) {
    .login-right {
        display: none;
    }
    
    .login-left {
        max-width: 100%;
    }
}

    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-left">
            <div class="login-content">
                <div class="login-header">
                    <h1>Selamat datang!</h1>
                    <p>Masukkan data sesuai ketentuan</p>
                </div>

                <div class="login-card">
                    <div class="card-header">
                        <i class="ph-fill ph-user-circle"></i>
                        <span>Login</span>
                    </div>
                    
                    <form class="card-body" action="dashboard-kategori.html">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Masukkan alamat email Anda" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Masukkan password Anda" required>
                        </div>
                        
                        <div class="forgot-password">
                            <a href="#">Lupa password?</a>
                        </div>
                        
                        <button onclick="window.location.href='batch_barang'" type="submit" class="btn-login">Log In</button>
                        
                        <div class="register-link">
                            Belum punya akun? <a href="registrasi">Registrasi.</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Right Side: Image cover -->
        <div class="login-right">
            <img src="{{ asset('gambar/login.png') }}" alt="Login Banner" class="banner-image">
        </div>
    </div>
</body>
</html>
