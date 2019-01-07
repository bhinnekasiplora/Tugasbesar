<?php
include "koneksi.php";
$namadinas = $_POST['namadinas'];
$emaildinas = $_POST['emaildinas'];
$usernamedinas = $_POST['usernamedinas'];
$passworddinas = $_POST['passworddinas'];

if (empty($namadinas)){
echo "<script>alert('Nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/index'>";
}else
if (empty($emaildinas)){
echo "<script>alert('Email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/index'>";
}else 
if(empty($usernamedinas)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/index'>";
}else 
if (empty($passworddinas)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/index'>";
}else{

$daftar = "INSERT INTO userdinas (namadinas,emaildinas,usernamedinas,passworddinas) values ('$namadinas','$emaildinas','$usernamedinas','$passworddinas')";
$q = $koneksi->query($daftar);
if ($q == TRUE){
echo "<script>alert('Berhasil Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=/index'>";
}else{
echo "<script>alert('Gagal Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=/index'>";
}
}
?>