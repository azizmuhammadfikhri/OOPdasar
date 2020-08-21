<?php
class produk {
    public $barang = "barang",
            $harga = "harga";


}
$produk1 = new produk();
    $produk1->barang = "ventela";
    $produk1->harga = 200000;
echo "barang :$produk1->barang, $produk1->harga";
?>