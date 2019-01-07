<?php 
include("config.php");

if(isset($_GET['idd']) ){
	
// ambil id dari query string
 $idd = $_GET['idd'];

//pindah
$simpan ="INSERT INTO validasi(idv,tanggalv,kodelaporanv,jenisbencanav,lokasibencanav,namapelaporv,alamatpelaporv,deskripsiv,fotov) 
SELECT idd,tgl,kolap,jeben,loben,napel,alpel,dsc,fto FROM laporan WHERE idd = $idd";
$hapus = "DELETE FROM laporan WHERE idd=$idd";
$query = mysqli_query($db, $simpan);
$query2 = mysqli_query($db, $hapus);

// apakah query hapus berhasil?
    if( $query && $query2){
        header('Location: /manajerlaporan');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}
 ?>
 