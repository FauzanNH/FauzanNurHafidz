<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon" href="assets/favicon.png" type="image/png">
</head>
<body>
    <form action="./backend/register.php" method="post">
    <img src="assets/image-login/icon.png" alt="Logo" style="display: block; margin: 0 auto 20px; max-width: 100px;">
        <h1>DAFTAR</h1>
        <p style="text-align: center;">Silahkan masukan informasi diri yang belum anda daftarkan.</p>
        <input type="text" name="Nama" placeholder="Masukkan nama anda" required>
        <input type="email" name="Email" placeholder="Masukkan email anda" required>
        <input type="password" name="password" placeholder="Masukkan password anda" required>
        <input type="password" name="confirm" placeholder="Masukkan konfirmasi password anda" required>
        <input type="submit" value="Daftar" name="submit">
    </form>
    <p>Sudah punya akun? <a href="index.php">Masuk di sini</a></p>
    <footer>
        &copy; 2024 Fauzan Nur Hafidz. All rights reserved.
    </footer>
</body>
</html>