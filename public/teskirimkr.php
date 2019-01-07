<?php 
include("config.php");

if(isset($_GET['idk']) ){
	
// ambil id dari query string
 $idk = $_GET['idk'];

//pindah
$simpan ="INSERT INTO rekapitulasi (idr,tanggalr,kodelaporanr,jenisbencanar,lokasibencanar,namapelaporr,alamatpelaporr,deskripsir,fotor) SELECT idk,tanggalk,kodelaporank,jenisbencanak,lokasibencanak,namapelapork,alamatpelapork,deskripsik,fotok FROM konfirmasi WHERE idk = $idk";
$hapus = "DELETE FROM konfirmasi WHERE idk = $idk";
$query = mysqli_query($db, $simpan);
$query2 = mysqli_query($db, $hapus);

// apakah query hapus berhasil?
    if( $query && $query2){
        header('Location: /konfirmasidinas');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}
 ?>
 