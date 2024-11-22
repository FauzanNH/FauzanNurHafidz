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
    <form action="./backend/login.php" method="POST">
        <img src="assets/image-login/icon.png" alt="Logo" style="display: block; margin: 0 auto 20px; max-width: 100px;">
        <h1>Login</h1>
        <p style="text-align: center;">Silahkan Masukan Informasi login yang sudah anda daftarkan</p>
        <input type="email" name="email" placeholder="Masukkan email anda" required>
        <input type="password" name="password" placeholder="Masukkan password anda" required>
        <input type="submit" value="Login" name="submit">
    </form>
    <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
    <footer>
        &copy; Fauzan Nur Hafidz | NIM: 23416255201134 | Pemograman Web Tugas Branching and Merging. | All rights reserved 2024.
    </footer>
</body>
</html>