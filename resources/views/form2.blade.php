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
        <a href="form-laporan.php">[+] Laporan Baru</a>
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
        $sql = "SELECT * FROM laporan";
        $query = mysqli_query($db, $sql);

        while($laporan = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$laporan['idd']."</td>";
            echo "<td>".$laporan['tgl']."</td>";
            echo "<td>".$laporan['kolap']."</td>";
            echo "<td>".$laporan['jeben']."</td>";
            echo "<td>".$laporan['loben']."</td>";
            echo "<td>".$laporan['napel']."</td>";
            echo "<td>".$laporan['alpel']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?idd=".$laporan['idd']."'>Edit</a> | ";
            echo "<a href='form2hapus.php?idd=".$laporan['idd']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>
