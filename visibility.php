<?php
class produkSepatu {
        public $barang,
            $warna,
            $Produklocal,
            $Produkluar;

        protected $harga;

        protected $diskon;


    public function __construct($barang, $warna, $harga, $Produklocal, $Produkluar) {
        $this->barang = $barang;
        $this->warna = $warna;
        $this->harga = $harga;
        $this->Produklocal = $Produklocal;
        $this->Produkluar = $Produkluar;
    } 


    public function getharga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    
    public function getcetak() {
        return "$this->barang , $this->harga , $this->warna";
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
    public  function setdiskon($diskon){
        $this->diskon= $diskon;

    }
}

class luar extends ProdukSepatu{
    public function cetak(){
        $str = "produk : {$this->getcetak()} | Brand : {$this->Produkluar}";
        return $str;
    }

    public  function setdiskon($diskon){
        $this->diskon= $diskon;

    }
}

$produk1 = new local("ventela","cream", 200000,"local","-");
$produk2 = new luar("convers", "hitam", 1000000, "-", "luar");

echo $produk1->cetak();
echo "<br>";
echo $produk2->cetak();
echo "<hr>";
$produk1->setdiskon(50);
echo "produk1 = " . $produk1->getharga();


?>

