<?php
require 'koneksi.php';
require 'fungsi.php';

$tabel = new crud();
$pedagang = $tabel->tampilan();

if(isset($_GET['keyword'])) {
    $pedagang = $tabel->cari($_GET['keyword']);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Pedagang Kirigakure</h1>

    <a href="tambah2.php" style="position:absolute; left:1200px; top:50px">Tambah Data</a>

    <form action="" method="get">
        <label for="keyword">Cari </label>
        <input type="text" name="keyword" id="keyword" size="30" autofocus autocomplete="off" placeholder="masukan kata kunci..">
    </form>
    <br>
    <div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Usaha</th>
            <th>Waktu Operasional</th>
            <th>Lokasi Usaha</th>
            <th>Omset</th>
            <th>Modal</th>
            <th>Aksi</th>
        </tr>

        <?php $i=1 ; ?>
        <?php foreach($pedagang as $pdg) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $pdg['nama']; ?></td>
            <td><?= $pdg['usaha']; ?></td>
            <td><?= $pdg['waktu_usaha']; ?></td>
            <td><?= $pdg['lokasi_usaha']; ?></td>
            <td><?= $pdg['omset']; ?></td>
            <td><?= $pdg['modal']; ?></td>
            <td><a href="edit2.php?id=<?= $pdg['id']; ?>">Edit</a> | 
                <a href="hapus2.php?id=<?= $pdg['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini')">Hapus</a></td>
        </tr>
        <?php $i++ ; ?>
        <?php endforeach; ?>

    </table>
    </div>

    <script src="js/script.js"></script>
</body>
</html>