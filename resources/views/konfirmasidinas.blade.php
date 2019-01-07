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
        <a class="navbar-brand js-scroll-trigger" href="#page-top">SIPLORA</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/profildinas">Beranda</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Konfirmasi</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/rekapitulasidinas">Rekapitulasi</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Masukan Section -->
    <section id="contact">
      <div class="container">
        <hr>
        <h3 class="text-center text-uppercase text-secondary mb-0">Konfirmasi Tindak Lanjut Laporan</h3>
        <hr class="star-dark mb-5">

        <div class="row">
          <div class="col-lg-11 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Laporan</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jenis Bencana</th>
      <th scope="col">Lokasi Bencana</th>
      <th scope="col">Nama Pelapor</th>
      <th scope="col">Aksi</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
    <tr>


      <?php
            $no=1;
             include("config.php");
        $sql = "SELECT * FROM konfirmasi";
        $query = mysqli_query($db, $sql);

        while($laporan = mysqli_fetch_array($query)){
            echo "<tr>";  
            echo "<td>".$no++."</td>";  
            echo "<td>".$laporan['idk']."</td>";
            echo "<td>".$laporan['tanggalk']."</td>";
            echo "<td>".$laporan['jenisbencanak']."</td>";
            echo "<td>".$laporan['lokasibencanak']."</td>";
            echo "<td>".$laporan['namapelapork']."</td>";
            echo "<td>";
            echo "<a href='hapusk.php?idk=".$laporan['idk']."'>Hapus | </a>";
            echo "<a href='teskirimkr.php?idk=".$laporan['idk']."' >Konfirmasi</a>";
            echo "</td>";
            echo "<td>";
            echo "<a href='detailkonfirmasi.php?idk=".$laporan['idk']."' >Detail</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

      <!-- <th>  <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            </div>
      </th>
      <th scope="row">1</th>
      <td>1/12/2018</td>
      <td>0001</td>
      <td>Banjir</td>
      <td>Jogja</td>
      <td>Ardi</td>
      <td>Jalan Kaliurang km 12</td>
    </tr>
    <tr>
      <th>  <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            </div>
      </th>
      <th scope="row">2</th>
      <td>1/3/2018</td>
      <td>0002</td>
      <td>Tanah Longsor</td>
      <td>Sleman</td>
      <td>Ani</td>
      <td>Maguwoharjo</td> -->
    </tr>
  </tbody>
</table>
            
<!-- <a href="/tindaklanjutdinas" class="btn btn-primary">Konfirmasi</a> -->
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
