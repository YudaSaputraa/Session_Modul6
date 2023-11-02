<?php
session_start(); // memulai session
// menghubungkan ke database
$connection = new mysqli('localhost', 'root', '', 'prakweb');

// ambil data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

//proses login dengan username dan password yang sesuai
$login_process = mysqli_query($connection, "SELECT * FROM admin WHERE  username = '$username' AND password = '$password'") 
or die (mysqli_error($connection));

$cek = mysqli_num_rows($login_process); // menghitung jumlah data yang ditemukan
if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:home.php");
}else{
    header("location:index.php?pesan=gagal");
}
?>