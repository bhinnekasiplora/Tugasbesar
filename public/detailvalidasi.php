<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIPLORA - Sistem Pelaporan Lokasi Rawan Bencana</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#">SIPLORA</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/profilbdpb">Beranda</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/validasi">Validasi</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/instruksi">Instruksi</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/rekapitulasiBPBD">Rekapitulasi</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>


    <!-- Masukan Section -->
    <section id="contact">
      <div class="container">
        <hr>
        <h2 class="text-center text-uppercase text-secondary mb-0">Detail Laporan</h2>
        <hr class="star-dark mb-5">
      <center>
    <?php 
    include 'koneksi.php';
    ?>
      <?php 
      $no = 1;
 
      if(isset($_GET['idv'])){
        $idv = $_GET['idv'];
        
        $idv = mysqli_query($koneksi,"select * from validasi where idv='$idv'");
      }else{
        $idv = mysqli_query($koneksi,"select * from validasi");
      }
      
      while($data = mysqli_fetch_array($idv)){
      ?>
      <table>
      <tr>
        <img src='img/<?php echo $data['fotov']; ?>' border="0">
        <hr>
      </tr>
      </table>
      <table class="table table-bordered" style="width: 50%; border: solid;">
      <tr>
        <td>Kode Laporan:</td>
        <td><?php echo $data['idv']; ?></td>
      </tr>
      <tr>
        <td>Tanggal:</td>
        <td><?php echo $data['tanggalv']; ?></td>
      </tr>
      <tr>
        <td>Jenis Bencana  :</td>
        <td><?php echo $data['jenisbencanav']; ?></td>
      </tr>
      <tr>
        <td>Lokasi Bencana:</td>
        <td><?php echo $data['lokasibencanav']; ?></td>
      </tr>
      <tr>
        <td>Nama pelapor:</td>
        <td><?php echo $data['namapelaporv']; ?></td>
      </tr>
      <tr>
        <td>Alamat Pelapor:</td>
        <td><?php echo $data['alamatpelaporv']; ?></td>
      </tr>
      <tr>
        <td>Deskripsi Laporan:</td>
        <td><?php echo $data['deskripsiv']; ?></td>
      </tr>
      <?php 
      }
      ?>
    </table>
  </center>



      </div>
    </section>
    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Lokasi</h4>
            <p class="lead mb-0">Jalan Kaliurang km. 14,5 Sleman 
              <br>Yogyakarta 55584</p>
          </div>
          <div class="col-md-6 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Sosial Media</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; SIPLORA 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

   

  </body>

</html>