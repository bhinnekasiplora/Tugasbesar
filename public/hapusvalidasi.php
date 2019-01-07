<?php

include("config.php");

if( isset($_GET['idv']) ){

    // ambil id dari query string
    $idv = $_GET['idv'];

    // buat query hapus
    $sql = "DELETE FROM validasi WHERE idv=$idv";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: /validasi');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>