<?php
include "koneksi.php";
$usernamedinas = $_POST['usernamedinas'];
$passworddinas = $_POST['passworddinas'];
if (empty($usernamedinas)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=logindinas.php'>";
}else if (empty($passworddinas)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=logindinas.php'>";
}else{


$query    = "SELECT * FROM userdinas WHERE usernamedinas = '$usernamedinas' AND passworddinas = '$passworddinas'";
$runquery = $koneksi->query($query);

if($runquery->num_rows > 0){
 session_start();
 $_SESSION['usernamedinas'] = $usernamedinas;
 header("Location: /profildinas");
} else {
 echo "<script>alert('Username atau Password salah')</script>";
 echo "<meta http-equiv='refresh' content='1 url=logindinas.php'>";

}
}


?>