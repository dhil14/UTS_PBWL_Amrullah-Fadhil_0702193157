<?php 

require_once "inc/Koneksi.php";
require_once "app/Sepatu.php";
require_once "index.php";

$id = $_GET['id'];
$sepatu = new Sepatu();

$row = $sepatu->edit($id);
?>

    <!-- content -->
    <div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Edit Sepatu
                </div>
                <div class="box-body">
                    <form action="sepatu_proses.php" method="post">
                        <input type="hidden" name="id_sepatu" value="<?php echo $row['id_sepatu']; ?>">
                            <div class="form-group">
                                <tr>
                                    <td>SEPATU</td>
                                    <td><input type="text" name="nama_sepatu" value="<?php echo $row['nama_sepatu']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>BRAND</td>
                                    <td><input type="text" name="brand" value="<?php echo $row['brand']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>HARGA</td>
                                    <td><input type="text" name="harga" value="<?php echo $row['harga']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>STOK</td>
                                    <td><input type="text" name="stok" value="<?php echo $row['stok']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>ID SUPPLIER</td>
                                    <td><input type="text" name="id_supplier" value="<?php echo $row['id_supplier']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="btn_update" value="UPDATE" class="btn btn-blue"></td>
                            </tr>
                    </form>
                </div>
            </div>
        </div>
    </div>
