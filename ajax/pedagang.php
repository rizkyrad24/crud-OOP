<?php
require '../koneksi.php';
require '../fungsi.php';

$keyword = $_GET['keyword'];
$ajaxCari = new crud();
$pedagang = $ajaxCari->cari($keyword);

?>
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