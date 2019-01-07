<?php
include "koneksi.php";
$namabdpb = $_POST['namabdpb'];
$emailbdpb = $_POST['emailbdpb'];
$usernamebdpb = $_POST['usernamebdpb'];
$passwordbdpb = $_POST['passwordbdpb'];

if (empty($namabdpb)){
echo "<script>alert('Nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/index'>";
}else
if (empty($emailbdpb)){
echo "<script>alert('Email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/index'>";
}else 
if(empty($usernamebdpb)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/index'>";
}else 
if (empty($passwordbdpb)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/index'>";
}else{

$daftar = "INSERT INTO userbdpb (namabdpb,emailbdpb,usernamebdpb,passwordbdpb) values ('$namabdpb','$emailbdpb','$usernamebdpb','$passwordbdpb')";
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