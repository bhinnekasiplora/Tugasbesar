<!DOCTYPE html>
<html lang="en">
<html>
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
        <a class="navbar-brand js-scroll-trigger" href="/index">SIPLORA</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">User</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Masukan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    

    <header>
        <h3>Formulir Pelaporan Lokasi Bencana</h3>
    </header>

    <form action="proses-pelaporan.php" method="POST">

        <fieldset>

        <p>
            <label for="tanggal">Tanggal: </label>
            <input type="date" name="tanggal" placeholder="Tanggal Pelaporan" />
        </p>
        <p>
            <label for="kodelaporan">Kodelaporan: </label>
            <input type="int" name="kodelaporan" placeholder="Kode laporan">
        </p>
        <p>
            <label for="jenisbencana">Jenis Bencana: </label>
            <input type="text" name="jenisbencana" placeholder="Jenis Bencana">
        </p>
        <p>
            <label for="lokasibencana">Lokasi Bencana: </label>
            <input type="text" name="lokasibencana" placeholder="Lokasi Bencana">
        </p>
        <p>
            <label for="namapelapor">Nama Pelapor: </label>
            <input type="text" name="namapelapor" placeholder="Nama Pelapor" />
        </p>
        <p>
            <label for="alamatpelaporan">Alamat Pelapor: </label>
            <input type="text" name="alamatpelapor" placeholder="Alamat Pelapor">
        </p>
        <p>
            <input href="/daftar" type="submit" value="Lapor" name="lapor" />
        </p>

        </fieldset>

    </form>

    </body>
</html>
