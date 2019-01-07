<?php

include("config.php");

if( isset($_GET['idi']) ){

    // ambil id dari query string
    $idi = $_GET['idi'];

    // buat query hapus
    $sql = "DELETE FROM istruksi WHERE idi=$idi";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: /instruksi');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>