<?php 
include("config.php");

if(isset($_GET['idi']) ){
	
// ambil id dari query string
 $idi = $_GET['idi'];

//pindah
$simpan ="INSERT INTO konfirmasi (idk,tanggalk,kodelaporank,jenisbencanak,lokasibencanak,namapelapork,alamatpelapork,deskripsik,fotok) SELECT idi,tanggali,kodelaporani,jenisbencanai,lokasibencanai,namapelapori,alamatpelapori,deskripsii,fotoi FROM istruksi WHERE idi = $idi";
$hapus = "DELETE FROM istruksi WHERE idi = $idi";
$query = mysqli_query($db, $simpan);
$query2 = mysqli_query($db, $hapus);

// apakah query hapus berhasil?
    if( $query && $query2){
        header('Location: /instruksi');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}
 ?>
 