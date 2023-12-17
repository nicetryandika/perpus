<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "db_perpus");

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Tangkap data dari formulir login //name
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mencari pengguna dengan username dan password yang sesuai
$query = "SELECT * FROM staff WHERE username_staff='$username' AND password_sTAFF='$password'";
$result = $conn->query($query);

// Periksa apakah pengguna ditemukan
if ($result->num_rows > 0) {
    // Login berhasil
    echo "Login berhasil!";
} else {
    // Login gagal
    echo "Login gagal. Periksa kembali username dan password.";
}
header("location:index.php?module=");
// Tutup koneksi ke database
$conn->close();
?>