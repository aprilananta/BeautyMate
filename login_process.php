<?php
session_start();
$db = new mysqli('localhost', 'root', '', 'pemweb', 3306);

if ($db->connect_error) {
    die('Koneksi ke database gagal: '.$db->connect_error);
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Basic server-side validation
    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "Username dan password harus diisi!";
        header('Location: login.php');
        exit();
    }

    $sql = "SELECT * FROM pemweb.akun WHERE username='$username'";
    $result = $db->query($sql);

    if($result->num_rows > 0){
        $user = $result->fetch_assoc();
        if ($password == $user['password']) {
            $_SESSION['username'] = $username;
            $_SESSION['id_akun'] = $user['id_akun'];
            header('Location: landingpage.php');
            exit();
        } else {
            $_SESSION['error'] = "Username atau password salah!";
            header('Location: login.php');
            exit();
        }
    } else {
        $_SESSION['error'] = "Akun tidak ditemukan!";
        header('Location: login.php');
        exit();
    }
}
?>
