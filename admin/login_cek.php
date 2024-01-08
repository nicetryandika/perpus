<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "db_perpus");

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Tangkap data dari formulir login.php //name
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mencari pengguna dengan username dan password yang sesuai
$query = "SELECT * FROM staff WHERE username_staff='$username' AND password_staff='$password'";
$result = $conn->query($query);

// Periksa apakah pengguna ditemukan
if ($result->num_rows > 0) {
    // Login berhasil
    $staff_data = $result->fetch_assoc();

    // Mulai sesi
    session_start();

    // Simpan informasi staff ke sesi
    $_SESSION['staff_id'] = $staff_data['id_staff'];
    $_SESSION['staff_username'] = $staff_data['username_staff'];
    
    // Set session waktu login
    $_SESSION['login_time'] = time();


    echo "<script>alert('Login berhasil!'); window.location.href='index.php?module=';</script>";
} else {
    // Login gagal
    echo "<script>alert('Login gagal. Periksa kembali username dan password.');</script>";
    header("location: login.php"); // Redirect ke halaman login jika login gagal
}

// Tutup koneksi ke database
$conn->close();
?>