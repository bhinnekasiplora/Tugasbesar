<?php 
include("config.php");

if(isset($_GET['id']) ){
	
// ambil id dari query string
 $id = $_GET['id'];

//pindah
$simpan ="INSERT INTO laporan (idd,tgl,kolap,jeben,loben,napel,alpel,dsc,fto) 
SELECT id,tanggal,kodelaporan,jenisbencana,lokasibencana,namapelapor,alamatpelapor,deskripsi,foto FROM laporanbencana WHERE id = $id";
$hapus = "DELETE FROM laporanbencana WHERE id=$id";
$query = mysqli_query($db, $simpan);
$query2 = mysqli_query($db, $hapus);

// apakah query hapus berhasil?
    if( $query && $query2){
        header('Location: /tabel');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}
 ?>
 