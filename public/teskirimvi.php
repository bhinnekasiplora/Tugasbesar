<?php 
include("config.php");

if(isset($_GET['idv']) ){
	
// ambil id dari query string
 $idv = $_GET['idv'];

//pindah
$simpan ="INSERT INTO istruksi(idi,tanggali,kodelaporani,jenisbencanai,lokasibencanai,namapelapori,alamatpelapori,deskripsii,fotoi) 
SELECT idv,tanggalv,kodelaporanv,jenisbencanav,lokasibencanav,namapelaporv,alamatpelaporv,deskripsiv,fotov FROM validasi WHERE idv = $idv";
$hapus = "DELETE FROM validasi WHERE idv=$idv";
$query = mysqli_query($db, $simpan);
$query2 = mysqli_query($db, $hapus);

// apakah query hapus berhasil?
    if( $query && $query2){
        header('Location: /validasi');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}
 ?>
 