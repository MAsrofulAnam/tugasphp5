<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Nilai Ujian Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/obj.css">

</head>

<body>
    <div class="frame">
        <h3 align="center">DATA NILAI UJIAN MAHASISWA</h3>
        <?php
        require_once 'mahasiswa.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // tangkap data dari form
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $kuliah = $_POST['kuliah'];
            $nilai = $_POST['nilai'];

            // buat objek
            $ns1 = new Mahasiswa($nim, $nama, $kuliah, $nilai);

            // cetak hasil dengan tabel
            echo '<table class="table table-bordered">';
            echo '<thead class="thead-dark"><tr><th>NIM</th><th>Nama</th><th>Kuliah</th><th>Nilai</th><th>Grade</th><th>Predikat</th><th>Status</th></tr></thead>';
            echo '<tr>';
            echo '<td>' . $ns1->nim . '</td>';
            echo '<td>' . $ns1->nama . '</td>';
            echo '<td>' . $ns1->kuliah . '</td>';
            echo '<td>' . $ns1->nilai . '</td>';
            echo '<td>' . $ns1->grade . '</td>';
            echo '<td>' . $ns1->predikat . '</td>';
            echo '<td>' . $ns1->status . '</td>';
            echo '</tr>';
            echo '</table>';
        }
        ?>
        <div align="left">
            <a href="formmahasiswa.php" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</body>
</html>