<?php
class database {
    private $host = "localhost";
    private $username = "root";
    private $pass = "";
    private $db = "penerapanoop";
    protected $koneksi;
    public function __construct () {
        $this->koneksi = new mysqli($this->host, $this->username, $this->pass, $this->db);
        if($this->koneksi == false)die('Database Tidak Terhubung' .this->koneksi->connect_error());
        return $this->koneksi;
    }
}