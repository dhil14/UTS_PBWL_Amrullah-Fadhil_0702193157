<?php 

require_once "inc/Koneksi.php";
require_once "app/Sepatu.php";
require_once "index.php";

$sepatu = new Sepatu();
$rows = $sepatu->tampil();

?>

<!-- content -->
<div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    SEPATU
                </div>
                <div class="box-body">
                    <a href="sepatu_input.php" class="text-green"><i class="fas fa-plus"></i>Tambah Data</a>

                    <form action="">
                        <div class="input-group">
                            <input type="text" name="key" placeholder="Pencarian">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID SEPATU</th>
                                <th>SEPATU</th>
                                <th>BRAND</th>
                                <th>HARGA</th>
                                <th>STOK</th>
                                <th>ID_SUPPLIER</th>
                                <th>AKSI</th>
                            </tr>   
                        </thead>

                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td><?php echo $row['id_sepatu']; ?></td>
                            <td><?php echo $row['nama_sepatu']; ?></td>
                            <td><?php echo $row['brand']; ?></td>
                            <td><?php echo $row['harga']; ?></td>
                            <td><?php echo $row['stok']; ?></td>
                            <td><?php echo $row['id_supplier']; ?></td>
                            <td>
                                <a href="sepatu_edit.php?id=<?php echo $row['id_sepatu']; ?>" title="Edit Data" class="text-orange"><i class="fas fa-edit"></i>Edit</a> |
                                <a href="sepatu_delete.php?id=<?php echo $row['id_sepatu']; ?>" onclick="return confirm('Yakin ingin hapus ?')" title="Hapus Data" class="text-red"><i class="fas fa-times"></i>Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </table>
                </div>
            </div>
        </div>
</div>    

<!-- footer -->
<div class="footer">
    <p>Copyright &copy; Toko Sepatu All Rights reserved 2021 || by: Amrullah Fadhil</p>
</div>