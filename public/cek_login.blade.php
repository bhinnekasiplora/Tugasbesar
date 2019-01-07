<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
if (empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}else if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}else{


$query    = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$runquery = $koneksi->query($query);

if($runquery->num_rows > 0){
 session_start();
 $_SESSION['username'] = $username;
 header("Location:/profilbnpb");
} else {
 echo "<script>alert('Username atau Password salah')</script>";
 echo "<meta http-equiv='refresh' content='1 url=login.php'>";

}
}


?>