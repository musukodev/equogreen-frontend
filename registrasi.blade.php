<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Registration - Equogreen</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="registrasi.css">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    background-color: #ffffff;
    color: #111111;
}

/* Header */
.header {
    background-color: #000000;
    color: #ffffff;
    padding: 24px 40px;
    display: flex;
    align-items: center;
    position: relative;
    min-height: 110px;
}

.back-btn {
    position: absolute;
    left: 40px;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: opacity 0.2s ease;
}

.back-btn:hover {
    opacity: 0.8;
}

.back-btn img {
    height: 24px;
    width: auto;
}

.header-content {
    margin: 0 auto;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 12px;
}

.logo {
    height: 32px;
    width: auto;
}

.company-info {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 14px;
    color: #e0e0e0;
}

.company-info .divider {
    color: #666666;
}

/* Form Container */
.main-container {
    max-width: 840px;
    margin: 48px auto;
    padding: 0 24px;
}

.page-header {
    text-align: center;
    margin-bottom: 48px;
}

.page-header h1 {
    font-size: 26px;
    font-weight: 700;
    margin-bottom: 12px;
    color: #000000;
}

.page-header p {
    font-size: 15px;
    color: #333333;
}

/* Form Layout */
.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 32px;
    margin-bottom: 24px;
}

.form-group {
    margin-bottom: 22px;
}

.form-group label {
    display: block;
    font-size: 14px;
    font-weight: 500;
    margin-bottom: 8px;
    color: #111;
}

.form-control {
    width: 100%;
    padding: 12px 14px;
    border: 1px solid #767676;
    border-radius: 4px;
    font-family: inherit;
    font-size: 14px;
    outline: none;
    transition: border-color 0.2s;
    background-color: #fff;
}

.form-control::placeholder {
    color: #666;
}

.form-control:focus {
    border-color: #0d47a1;
}

textarea.form-control {
    resize: none;
}

.deskripsi-textarea {
    height: 220px;
}

/* Align Kategori Vendor to the bottom inputs */
.no-label {
    margin-top: -4px;
}

.full-width {
    width: 100%;
    margin-bottom: 32px;
}

/* Drag & Drop */
.file-drop-area {
    border: 1px dashed #767676;
    border-radius: 4px;
    padding: 36px 20px;
    text-align: center;
    background-color: #fbfbfb;
    cursor: pointer;
    margin-bottom: 8px;
    transition: background-color 0.2s;
}

.file-drop-area:hover {
    background-color: #f5f5f5;
}

.file-drop-content p {
    font-size: 14px;
    color: #111;
}

.file-help-text {
    font-size: 13px;
    color: #333;
    display: block;
}

/* Actions */
.submit-btn {
    width: 100%;
    background-color: #0044fa; 
    color: #ffffff;
    border: none;
    border-radius: 4px;
    padding: 14px;
    font-size: 15px;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.2s ease;
    margin-bottom: 24px;
}

.submit-btn:hover {
    background-color: #0036d1;
}

.login-link {
    text-align: right;
    font-size: 14px;
    color: #111;
}

.login-link a {
    color: #0044fa;
    text-decoration: none;
}

.login-link a:hover {
    text-decoration: underline;
}

/* Responsive Table / Phone Layout */
@media (max-width: 768px) {
    .header {
        flex-direction: column;
        padding: 24px 20px;
        align-items: center;
    }
    
    .back-btn {
        position: static;
        transform: none;
        margin-bottom: 20px;
        align-self: flex-start;
    }

    .form-grid {
        grid-template-columns: 1fr;
        gap: 0px;
    }
    
    .deskripsi-textarea {
        height: 120px;
    }

    .company-info .divider {
        display: none;
    }
    
    .company-info {
        flex-direction: column;
        gap: 6px;
    }
}

    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <a href="#" class="back-btn" onclick="history.back(); return false;">
            <img src="gambar/Back Arrow.png" alt="Kembali">
        </a>
        <div class="header-content">
            <img src="gambar/logo putih.png" alt="Equogreen Logo" class="logo">
            <span class="logo-text">Equogreen</span>
            <div class="company-info">
                <span>Company Email</span>
                <span class="divider">|</span>
                <span>Company number</span>
                <span class="divider">|</span>
                <span>Company website</span>
            </div>
        </div>
    </header>

    <!-- Main Form -->
    <main class="main-container">
        <div class="page-header">
            <h1>Online Registration</h1>
            <p>Please fill out this registration form.</p>
        </div>

        <form class="registration-form">
            <div class="form-grid">
                <!-- Left Column -->
                <div class="form-column">
                    <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email Perusahaan</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>No. Handphone Perusahaan</label>
                        <input type="tel" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat Perusahaan</label>
                        <textarea class="form-control" rows="6"></textarea>
                    </div>
                    <div class="form-group no-label">
                        <input type="text" class="form-control" placeholder="Kategori Vendor">
                    </div>
                </div>

                <!-- Right Column -->
                <div class="form-column">
                    <div class="form-group">
                        <label>Nama Penanggung jawab</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Perusahaan</label>
                        <textarea class="form-control deskripsi-textarea"></textarea>
                    </div>
                    <div class="form-group no-label">
                        <input type="text" class="form-control" placeholder="Provinsi">
                    </div>
                    <div class="form-group no-label">
                        <input type="text" class="form-control" placeholder="Kota">
                    </div>
                    <div class="form-group no-label">
                        <input type="text" class="form-control" placeholder="Kode Pos">
                    </div>
                </div>
            </div>

            <!-- Full Width Content -->
            <div class="form-group full-width">
                <label>Portofolio Perusahaan</label>
                <div class="file-drop-area" style="position: relative; overflow: hidden;">
                    <input type="file" name="portofolio" accept=".pdf,.docx" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                    <div class="file-drop-content">
                        <p>You can drag and drop files here to add them.</p>
                    </div>
                </div>
                <span class="file-help-text">Accepted files type : .pdf, .docx</span>
            </div>

            <button type="button" class="submit-btn">Registrasi</button>

            <div class="login-link">
                Sudah punya akun? <a href="login">Login.</a>
            </div>
        </form>
    </main>
</body>
</html>
