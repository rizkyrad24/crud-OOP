<?php
require 'koneksi.php';
require 'fungsi.php';

$id = $_GET['id'];
$hapusTabel = new crud();
if($hapusTabel->hapus($id)>0) {
    echo "<script>
            alert('Data berhasil dihapus');
            document.location.href = 'index.php';
            </script>";
} else {
    echo "<script>
            alert('Data gagal dihapus');
            document.location.href = 'index.php';
            </script>";
}

?>
