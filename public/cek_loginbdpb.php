<?php
include "koneksi.php";
$usernamebdpb = $_POST['usernamebdpb'];
$passwordbdpb = $_POST['passwordbdpb'];
if (empty($usernamebdpb)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=loginbdpb.php'>";
}else if (empty($passwordbdpb)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=loginbdpb.php'>";
}else{


$query    = "SELECT * FROM userbdpb WHERE usernamebdpb = '$usernamebdpb' AND passwordbdpb = '$passwordbdpb'";
$runquery = $koneksi->query($query);

if($runquery->num_rows > 0){
 session_start();
 $_SESSION['usernamebdpb'] = $usernamebdpb;
 header("Location: /profilbdpb");
} else {
 echo "<script>alert('Username atau Password salah')</script>";
 echo "<meta http-equiv='refresh' content='1 url=loginbdpb.php'>";

}
}


?>