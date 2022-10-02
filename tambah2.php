<?php
require 'koneksi.php';
require 'fungsi.php';

$tambahTabel = new crud();
if(isset($_POST['submit'])) {
     if($tambahTabel->tambah($_POST)>0) {
        echo "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'index.php';
            </script>";
     } else {
        echo "<script>
            alert('Data gagal ditambahkan');
            document.location.href = 'index.php';
            </script>";
     }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Pedagang</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="usaha">Usaha : </label>
                <input type="text" name="usaha" id="usaha" required>
            </li>
            <li>
                Jam Operasional <br>
                <input type="checkbox" name="waktu[]" id="pagi" value="Pagi">
                <label for="pagi"> Pagi</label> <br>
                <input type="checkbox" name="waktu[]" id="siang" value="Siang">
                <label for="siang"> Siang</label> <br>
                <input type="checkbox" name="waktu[]" id="sore" value="Sore">
                <label for="sore"> Sore</label> <br>
                <input type="checkbox" name="waktu[]" id="malam" value="Malam">
                <label for="malam"> Malam</label> <br>
            </li>
            <li>
                <label for="lokasi_usaha">Lokasi Usaha : </label>
                <input type="text" name="lokasi_usaha" id="lokasi_usaha" required>
            </li>
            <li>
                <label for="omset">Omset : </label>
                <input type="number" name="omset" id="omset" required>
            </li>
            <li>
                <label for="modal">Modal : </label>
                <input type="number" name="modal" id="modal" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>