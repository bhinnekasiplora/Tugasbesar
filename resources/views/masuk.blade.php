<?php
session_start();
if (isset($_SESSION['username'])){
header ("location:index.php");
}
?>
<?php 
$namaServer = "localhost";
$namaPengguna = "root";
$password = "";
$nama_db = "Login";

$koneksi = new mysqli($namaServer, $namaPengguna, $password, $nama_db);

if($koneksi->connect_error) {
	die("koneksi gagal : " .$koneksi->connect_error."<br>");
}

 ?>
<html>
<head>
<title>LOGIN</title>
</head>
<body>
<form method="POST" name="login" action="cek_login.blade.php">
<table border=0 align="center" cellpadding=5 cellspacing=0>
<tr>
<td colspan=3><center><font size=5>LOGIN</font></center></td>
</tr>
<tr>
<td>Username</td>
<td>:</td>
<td><input type="text" name="username"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td colspan=2></td>
<td><input type="submit" name="submit" value="LOGIN"></td>
</tr>
<tr>
<td colspan=3><a href="/daftar">DAFTAR</a></td>
</tr>
</table>
</form>
</body>
</html>