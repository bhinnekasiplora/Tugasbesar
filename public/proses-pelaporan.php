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
    $deskripsi = $_POST['deskripsi'];
    // $target = "img/".basename($_FILES['foto']['name']);
    // $foto = $_FILES['foto']['name'];
    $foto = $_POST['foto'];

    // buat query
    $sql = "INSERT INTO laporanbencana (tanggal, kodelaporan, jenisbencana, lokasibencana, namapelapor, alamatpelapor,deskripsi, foto) VALUE ('$tanggal', '$kodelaporan', '$jenisbencana', '$lokasibencana', '$namapelapor', '$alamatpelapor', '$deskripsi', '$foto')";
    $query = mysqli_query($db, $sql);
    if(move_uploaded_file($_FILES,['foto']['tmp_name'],$target)){
    }else{ echo "Gagal mengupload foto";}

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: /pesanlaporan');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: /form-laporan');
    }


} else {
    die("Akses dilarang...");
}

?>