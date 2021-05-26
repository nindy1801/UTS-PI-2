<?php
include 'connection.php';
class Model extends Connection
{
 public function __construct()
 {
 $this->conn = $this->get_connection();
 }
 public function insert($idabsen, $tglabsen, $masuk, $keluar, $kodeabsen, $sesi, $kelassesi)
 {
    $sql = "INSERT INTO tbl_absen (idabsen, tglabsen, masuk, keluar, kodeabsen, sesi, kelassesi) VALUES ('$idabsen' , '$tglabsen' , '$masuk' , '$keluar' , '$kodeabsen' , '$sesi' , '$kelassesi')";
    $this->conn->query($sql);
 }
 
 public function tampil_data()
 {
 $sql = "SELECT * FROM tblabsen";
$bind = $this->conn->query($sql);

 if (!empty($baris)) {
 return $baris;
 }
 }
 
 
}