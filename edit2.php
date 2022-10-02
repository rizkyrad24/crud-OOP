<?php
require 'koneksi.php';
require 'fungsi.php';

$id = $_GET['id'];
$editTabel = new crud();
$pdg = $editTabel->tampilanEdit($id);
$waktu = explode(' & ', $pdg['waktu_usaha']);

if(isset($_POST['submit'])) {
     if($editTabel->edit($_POST)>0) {
        echo "<script>
            alert('Data berhasil diedit');
            document.location.href = 'index.php';
            </script>";
     } else {
        echo "<script>
            alert('Data gagal diedit');
            document.location.href = 'index.php';
            </script>";
     }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Edit Data</title>
</head>
<body>
    <h1>Edit Data Pedagang</h1>

    <form action="" method="post">
        <p><input type="hidden" name="id" id="id" value="<?= $pdg['id']; ?>"></p>
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $pdg['nama']; ?>">
            </li>
            <li>
                <label for="usaha">Usaha : </label>
                <input type="text" name="usaha" id="usaha" required value="<?= $pdg['usaha']; ?>">
            </li>
            <li>
                Jam Operasional <br>
                <?php if(in_array("Pagi", $waktu)) : ?>
                    <input type="checkbox" name="waktu[]" id="pagi" value="Pagi" checked>
                <?php else : ?>
                    <input type="checkbox" name="waktu[]" id="pagi" value="Pagi">
                <?php endif; ?>
                <label for="pagi"> Pagi</label> <br>
                
                <?php if(in_array("Siang", $waktu)) : ?>
                    <input type="checkbox" name="waktu[]" id="siang" value="Siang" checked>
                <?php else : ?>
                    <input type="checkbox" name="waktu[]" id="siang" value="Siang">
                <?php endif; ?>
                <label for="siang"> Siang</label> <br>
                
                <?php if(in_array("Sore", $waktu)) : ?>
                    <input type="checkbox" name="waktu[]" id="sore" value="Sore" checked>
                <?php else : ?>
                    <input type="checkbox" name="waktu[]" id="sore" value="Sore">
                <?php endif; ?>
                <label for="sore"> Sore</label> <br>
                
                <?php if(in_array("Malam", $waktu)) : ?>
                    <input type="checkbox" name="waktu[]" id="malam" value="Malam" checked>
                <?php else : ?>
                    <input type="checkbox" name="waktu[]" id="malam" value="Malam">
                <?php endif; ?>   
                <label for="malam"> Malam</label> <br>
            </li>
            <li>
                <label for="lokasi_usaha">Lokasi Usaha : </label>
                <input type="text" name="lokasi_usaha" id="lokasi_usaha" required value="<?= $pdg['lokasi_usaha'] ?>">
            </li>
            <li>
                <label for="omset">Omset : </label>
                <input type="number" name="omset" id="omset" required value="<?= $pdg['omset']; ?>">
            </li>
            <li>
                <label for="modal">Modal : </label>
                <input type="number" name="modal" id="modal" required value="<?= $pdg['modal']; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Edit Data</button>
            </li>
        </ul>
    </form>
</body>
</html>