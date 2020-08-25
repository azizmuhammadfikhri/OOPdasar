<?php
class ProdukMotor{
    public $merk,
           $warna,
           $harga;

    public function getCetak(){
    return "$this->merk ,
            $this->warna,
            $this->harga";

    }

}
$produk1 = new ProdukMotor();
$produk1->warna = "Merah";
$produk1->merk = "yamaha";
$produk1->harga = 20000000;
echo "Motor = " . $produk1->getCetak();
 

?>