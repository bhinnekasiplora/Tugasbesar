<?php

include("config.php");

if( isset($_GET['idk']) ){

    // ambil id dari query string
    $idk = $_GET['idk'];

    // buat query hapus
    $sql = "DELETE FROM konfirmasi WHERE idk=$idk";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: /konfirmasidinas');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>