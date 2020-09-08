<?php
class produkSepatu {
    public $barang,
           $warna,
           $harga,
           $Produklocal,
           $Produkluar; 

    public function __construct($barang, $warna, $harga, $Produklocal, $Produkluar) {
        $this->barang = $barang;
        $this->warna = $warna;
        $this->harga = $harga;
        $this->Produklocal = $Produklocal;
        $this->Produkluar = $Produkluar;
    } 
    
    public function getcetak() {
        return "$this->barang, $this->warna, $this->harga";
    }
}

class infoproduk {
    public function cetak(){
        $str = $this->getcetak();
        return $str;
    } 
}

class local extends ProdukSepatu{
    public function cetak(){
        $str = "produk : {$this->getcetak()} | Brand : {$this->Produklocal}";
        return $str;
    }
}

class luar extends ProdukSepatu{
    public function cetak(){
        $str = "produk : {$this->getcetak()} | Brand : {$this->Produkluar}";
        return $str;
    }
}

$produk1 = new local("ventela","cream", 200000,"local","-");
$produk2 = new luar("convers", "hitam", 1000000, "-", "luar");

echo $produk1->cetak();
echo "<br>";
echo $produk2->cetak();


?>