<?php
include 'connection.php';
class Model extends Connection
{
 public function __construct()
 {
 $this->conn = $this->get_connection();
 }
 public function insert_absen($idabsen, $tglabsen, $masuk, $keluar, $kodeabsen, $sesi, $kelassesi)
 {
 $sql = "INSERT INTO tbl_absen (idabsen, tglabsen, masuk, keluar, kodeabsen, sesi, kelassesi) VALUES ('$idabsen','$tglabsen','$masuk','$keluar','$kodeabsen','$sesi','$kelassesi')";
 $this->conn->query($sql);
 }
 
 public function tampil_data_absen()
 {
    $sql = "SELECT * FROM tbl_absen";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
    $baris[] = $obj;
 }
    if (!empty($baris)) {
    return $baris;
    }
 }
 
}