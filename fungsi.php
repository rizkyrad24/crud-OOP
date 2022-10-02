<?php
require_once 'koneksi.php';

class crud extends database {
    public function tampilan () {
        $sql = "SELECT * FROM pedagang ORDER BY id DESC";
        $rows = mysqli_query($this->koneksi, $sql);
        return $rows;
    }

    public function tambah ($data) {
        $nama = htmlspecialchars($data['nama']);
        $usaha = htmlspecialchars($data['usaha']);
        $waktu_usaha = implode(" & ", $data['waktu']);
        $lokasi_usaha = htmlspecialchars($data['lokasi_usaha']);
        $omset = htmlspecialchars($data['omset']);
        $modal = htmlspecialchars($data['modal']);
        $query = "INSERT INTO pedagang VALUES 
                    ('', '$nama', '$usaha', '$waktu_usaha', '$lokasi_usaha', '$omset', '$modal')
                    ";
        mysqli_query($this->koneksi, $query);
        return mysqli_affected_rows($this->koneksi);
    }

    public function hapus ($id) {
        mysqli_query($this->koneksi, "DELETE FROM pedagang WHERE id = $id");
        return mysqli_affected_rows($this->koneksi);
    }

    public function tampilanEdit ($id) {
        $sql = "SELECT * FROM pedagang WHERE id = $id";
        $rows = mysqli_query($this->koneksi, $sql);
        $array = mysqli_fetch_assoc($rows);
        return $array;
    }

    public function edit ($data) {
        $id = $data['id'];
        $nama = htmlspecialchars($data['nama']);
        $usaha = htmlspecialchars($data['usaha']);
        $waktu_usaha = implode(" & ", $data['waktu']);
        $lokasi_usaha = htmlspecialchars($data['lokasi_usaha']);
        $omset = htmlspecialchars($data['omset']);
        $modal = htmlspecialchars($data['modal']);
        $query = "UPDATE pedagang SET 
                    nama = '$nama',
                    usaha = '$usaha',
                    waktu_usaha = '$waktu_usaha',
                    lokasi_usaha = '$lokasi_usaha',
                    omset = '$omset',
                    modal = '$modal'
                    WHERE id = $id
                    ";
        mysqli_query($this->koneksi, $query);
        return mysqli_affected_rows($this->koneksi);
    }

    public function cari ($keyword) {
        $sql = "SELECT * FROM pedagang WHERE
                nama LIKE '%$keyword%' OR
                usaha LIKE '%$keyword%' OR
                waktu_usaha LIKE '%$keyword%' OR
                lokasi_usaha LIKE '%$keyword%' OR
                omset LIKE '%$keyword%' OR
                modal LIKE '%$keyword%'
                ";
        $rows = mysqli_query($this->koneksi, $sql);
        return $rows;
    }
}