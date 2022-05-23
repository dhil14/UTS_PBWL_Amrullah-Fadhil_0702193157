<?php 

require_once "inc/Koneksi.php";
require_once "app/Sepatu.php";


$id = $_GET['id'];

$sepatu = new Sepatu();
$rows = $sepau->delete($id);

?>

Data berhasil dihapus!

<a href="sepatu_tampil.php">Kembali</a>