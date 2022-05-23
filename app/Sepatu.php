<?php 

class Sepatu extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_sepatu";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $nama_sepatu = $_POST['nama_sepatu'];
        $brand = $_POST['brand'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $id_supplier = $_POST['id_supplier'];

        $sql = "INSERT INTO tb_sepatu (nama_sepatu, brand, harga, stok, id_supplier) VALUES (:cover, :nama_sepatu, :brand, :harga, :stok, :id_supplier)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_sepatu", $nama_sepatu);
        $stmt->bindParam(":brand", $brand);
        $stmt->bindParam(":harga", $harga);
        $stmt->bindParam(":stok", $stok);
        $stmt->bindParam(":id_supplier", $id_supplier);
        $stmt->execute();

    }

    public function edit($id)
    {
        
        $sql = "SELECT * FROM tb_sepatu WHERE id_sepatu=:id_sepatu";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_sepatu", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_sepatu = $_POST['nama_sepatu'];
        $brand = $_POST['brand'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $id_supplier = $_POST['id_supplier'];
        $id_sepatu = $_POST['id_sepatu'];

        $sql = "UPDATE tb_sepatu SET nama_sepatu=:nama_sepatu, brand=:brand, harga=:harga, stok=:stok, id_supplier=:id_supplier WHERE id_sepatu=:id_sepatu";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_sepatu", $nama_sepatu);
        $stmt->bindParam(":brand", $brand);
        $stmt->bindParam(":harga", $harga);
        $stmt->bindParam(":stok", $stok);
        $stmt->bindParam(":id_supplier", $id_supplier);
        $stmt->bindParam(":id_sepatu", $id_sepatu);
        $stmt->execute();

    }

    public function delete($id)
    {
        
        $sql = "DELETE FROM tb_sepatu WHERE id_sepatu=:id_sepatu";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_sepatu", $id);
        $stmt->execute();

    }

}

