<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "db_perpus");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Tangkap data dari formulir login_anggota.php
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mencari anggota dengan username dan password yang sesuai
$query = "SELECT * FROM anggota WHERE username_anggota='$username' AND password_anggota='$password'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Login berhasil
    $anggota_data = $result->fetch_assoc();
    session_start();
    $_SESSION['anggota_id'] = $anggota_data['id_anggota'];
    $_SESSION['anggota_username'] = $anggota_data['username_anggota'];
    $_SESSION['anggota_nama'] = $anggota_data['nama_anggota'];
    $_SESSION['auth_level'] = $anggota_data['level'];
    $_SESSION['login_time'] = time();

    header("Location: dashboard_anggota.php?module=");
} else {
    // Login gagal
    echo "<script>alert('Login gagal. Periksa kembali username dan password.');</script>";
    header("location: login_anggota.php");
}

$conn->close();
?>
