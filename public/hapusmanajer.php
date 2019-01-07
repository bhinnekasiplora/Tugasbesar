<?php

include("config.php");

if( isset($_GET['idd']) ){

    // ambil id dari query string
    $idd = $_GET['idd'];

    // buat query hapus
    $sql = "DELETE FROM laporan WHERE idd=$idd";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: /manajerlaporan');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>