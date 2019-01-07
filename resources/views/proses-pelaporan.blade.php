<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['lapor'])){

    // ambil data dari formulir
    $tanggal = $_POST['tanggal'];
    $kodelaporan = $_POST['kodelaporan'];
    $jenisbencana = $_POST['jenisbencana'];
    $lokasibencana = $_POST['lokasibencana'];
    $namapelapor = $_POST['namapelapor'];
    $alamatpelapor = $_POST['alamatpelapor'];

    // buat query
    $sql = "INSERT INTO laporanbencana (tanggal, kodelaporan, jenisbencana, lokasibencana, namapelapor, alamatpelapor) VALUE ('$tanggal', '$kodelaporan', '$jenisbencana', '$lokasibencana', '$namapelapor', '$alamatpelapor')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>