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

    <!-- modals -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger">SIPLORA</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/profilbnpb">Beranda</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/tabel">Verifikasi</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/manajerlaporan">Manajemen</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/rekap">Rekapitulasi</a>
            </li>
</nav>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Masukan Section -->
    <section id="contact">
      <div class="container">
        <hr>
        <h2 class="text-center text-uppercase text-secondary mb-0">Verifikasi Laporan</h2>
        <hr class="star-dark mb-5">

        <div class="row">
          <div class="col-lg-11 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Kode Laporan</th>
      <th scope="col">Jenis Bencana</th>
      <th scope="col">Lokasi Bencana</th>
      <th scope="col">Nama Pelapor</th>
      <th scope="col">Alamat Pelapor</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Foto</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
    <tr>
     <!--  <?php
             include("config.php");
        $sql = "SELECT * FROM laporanbencana";
        $query = mysqli_query($db, $sql);
        $laporan = mysqli_fetch_array($query);

        $id = $laporan['id'];
        $tanggal =$laporan['tanggal'];
        $kodelaporan = $laporan['kodelaporan'];
        $jenisbencana = $laporan['jenisbencana'];
        $lokasibencana =$laporan['lokasibencana'];
        $namapelapor = $laporan['namapelapor'];
        $alamatpelapor =$laporan['alamatpelapor'];
        $deskripsi =$laporan['deskripsi'];
        $foto =$laporan['foto'];

        ?>

        <td><?php echo $id ?></td>
        <td><?php echo $tanggal ?></td>
        <td><?php echo $kodelaporan ?></td>
        <td><?php echo $jenisbencana ?></td>
        <td><?php echo $lokasibencana ?></td>
        <td><?php echo $namapelapor ?></td>
        <td><?php echo $alamatpelapor ?></td>
       
        
        
       
        <td>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Details</button>
           <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <h1>Deskripsi</h1>
                        <p><?php echo $deskripsi ?></p>
                      </div>
                    </div>
                  </div> 

          </td>
        <td><?php echo $foto ?></td> -->

             <?php
             include("config.php");
        $sql = "SELECT * FROM laporanbencana";
        $query = mysqli_query($db, $sql);

        $query = mysqli_query($koneksi, "SELECT * FROM laporanbencana"); $row_query = mysqli_fetch_array($query);
        ?> 
        <div> <p>DISINI ADALAH TEMPAT UNTUK MENAMPILKAN CATATAN ITU</p> 
              <p> <?php echo $row_query['catatan'] ?> </p>
        </div>



      
      <!-- <th scope="row">1</th>
      <td>1/12/2018</td>
      <td>0001</td>
      <td>Banjir</td>
      <td>Jogja</td>
      <td>Ardi</td>
      <td>Jalan Kaliurang km 12</td>
      <td> -->
        <!-- Large modal -->
<!--                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Details</button>

                  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <h1>Deskripsi</h1>
                        <p>Pada Suatu Hari .......</p>
                      </div>
                    </div>
                  </div> -->
      <!-- </td> -->
    </tr>
  </tbody>
</table>
            
          </div>
        </div>
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
