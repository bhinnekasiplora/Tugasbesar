<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pelaporan Lokasi Bencana | SIPLORA</title>
</head>

<body>
    <header>
        <h3>Laporan Yang Sudah Masuk</h3>
    </header>

    <nav>
        <a href="form-laporan.php">[+] Laporan Baru</a><br>
        <a href="form2.php">[+] Laporan Yang Telah di Verifikasi</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Kode laporan</th>
            <th>Jenis Bencana</th>
            <th>Lokasi Bencana</th>
            <th>Nama Pelapor</th>
            <th>Alamat Pelapor</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM laporanbencana";
        $query = mysqli_query($db, $sql);

        while($laporan = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$laporan['id']."</td>";
            echo "<td>".$laporan['tanggal']."</td>";
            echo "<td>".$laporan['kodelaporan']."</td>";
            echo "<td>".$laporan['jenisbencana']."</td>";
            echo "<td>".$laporan['lokasibencana']."</td>";
            echo "<td>".$laporan['namapelapor']."</td>";
            echo "<td>".$laporan['alamatpelapor']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$laporan['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$laporan['id']."'>Hapus | </a>";
            echo "<a href='/testkirim".$laporan['id']."'>Verifikasi</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>
