<?php 

require_once "inc/Koneksi.php";
require_once "app/Sepatu.php";

$sepatu = new Sepatu();

if (isset($_POST['btn_simpan'])) {
    $novel->simpan();
    header("location:sepatu_tampil.php");
}

if (isset($_POST['btn_update'])) {
    $novel->update();
    header("location:sepatu_tampil.php");
}

?>