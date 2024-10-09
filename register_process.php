<?php
session_start();
$db = new mysqli('localhost', 'root', '', 'pemweb', 3306);

if ($db->connect_error) {
    die('Koneksi ke database gagal: '.$db->connect_error);
}

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Basic server-side validation
    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "Username dan password harus diisi!";
        header('Location: register.php');
        exit();
    }

    // Check if username already exists
    $sql = "SELECT * FROM pemweb.akun WHERE username='$username'";
    $result = $db->query($sql);
    if($result->num_rows > 0){
        $_SESSION['error'] = "Username sudah terdaftar!";
        header('Location: register.php');
        exit();
    }

    // Insert new user
    $sql = "INSERT INTO pemweb.akun (username, password) VALUES ('$username', '$password')";
    if ($db->query($sql) === TRUE) {
        $_SESSION['success'] = "Registrasi Berhasil!";
        header('Location: login.php');
        exit();
    } else {
        $_SESSION['error'] = "Error: " . $sql . "<br>" . $db->error;
        header('Location: register.php');
        exit();
    }
}
?>
