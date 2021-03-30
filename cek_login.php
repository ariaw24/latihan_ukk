<?php
session_start();
include 'config/konek.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "select * from tb_user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);

    if($data['level']=="admin"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        header("location:admin.php");
    }else if($data['level']=="siswa"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "siswa";
        header("location:siswa.php");
    } else {
        echo "<script>alert('Username atau password anda salah');document.location.href='index.php'</script>";
    }
}else{
    echo "<script>alert('Username atau password anda salah');document.location.href='index.php'</script>";
}
?>  