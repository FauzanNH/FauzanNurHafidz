<?php

require './../config/db.php';

if(isset($_POST['submit'])) {

    global $db_connect;

    // var_dump($_POST);

    $name = isset($_POST['Nama']) ? $_POST['Nama'] : null;
    $email = isset($_POST['Email']) ? $_POST['Email'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;
    $confirm = isset($_POST['confirm']) ? $_POST['confirm'] : null;

    if(!$name || !$email || !$password || !$confirm) {
        echo "Semua field harus diisi.";
        die;
    }

    if($confirm != $password) {
        echo "password tidak sesuai dengan konfirmasi password";
        die;
    }

    $usedEmail = mysqli_query($db_connect,"SELECT email FROM users WHERE email = '$email'");
    if(mysqli_num_rows($usedEmail) > 0) {
        echo "email sudah digunakan";
        die;
    }

    $password = password_hash($password,PASSWORD_DEFAULT);
    $created_at = date('Y-m-d H:i:s',time());
        
    $stmt = $db_connect->prepare("INSERT INTO users (name, email, password, created_at) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $password, $created_at);
    $stmt->execute();
    $stmt->close();

    echo "registrasi berhasil";
}
