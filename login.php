<?php
include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['userName'];
    $password = $_POST['password'];

    // Query untuk memeriksa di tabel karyawan
    $sql_karyawan = "SELECT * FROM karyawan WHERE username='$username' AND password='$password'";
    $query_karyawan = mysqli_query($conn, $sql_karyawan);
    $find_karyawan = mysqli_num_rows($query_karyawan);

    // Query untuk memeriksa di tabel admin
    $sql_admin = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $query_admin = mysqli_query($conn, $sql_admin);
    $find_admin = mysqli_num_rows($query_admin);

    if ($find_karyawan == 1) {
        echo '<script>alert("Login Sukses sebagai Karyawan");</script>';
        echo '<script>location="index.php";</script>';
    } elseif ($find_admin == 1) {
        echo '<script>alert("Login Sukses sebagai Admin");</script>';
        echo '<script>location="index_admin.php";</script>';
    } else {
        echo '<script>alert("Login Gagal");</script>';
        echo '<script>location="login.php";</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APOTEK Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="apotek.jpg" alt="Apotek Logo">
        </div>
        <div class="text-center mt-4 name">
            WELCOME
        </div>
        <form class="p-3 mt-3" method="post">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="Username" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <button type="submit" name="login" class="btn mt-3">Login</button>
        </form>
    </div>
</body>
</html>
