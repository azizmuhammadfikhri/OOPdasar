<?php
//membuat class manusia
class Manusia{
    public $Nama,
           $Tgl_lahir,
           $jenis_kelamin,
           $status;

    public function __construct($Nama , $Tgl_lahir, $jenis_kelamin, $status){
        $this->Nama = $Nama;
        $this->Tgl_lahir = $Tgl_lahir;
        $this->Jenis_kelamin = $jenis_kelamin;
        $this->status = $status;    
    }
    
    public function getcetak(){
        return "Nama saya = $this->Nama 
                <br>
                Saya lahir pada tanggal = $this->Tgl_lahir 
                <br>  
                Jenis kelamin saya = $this->Jenis_kelamin 
                <br>
                Status saya = $this->status";
    }

}
class infomanusia{
    public function cetak($manusia){
        $str = $manusia->getcetak();
        return $str;
    }

}

$manusia1 = new Manusia("Aziz Muhammad Fikhri", "10 september 2003", "Laki-laki", "Pelajar");
$manusia2 = new Manusia("fauzan mubaroq", "29 februari 2001", "laki-laki", "pelajar");
$infomanusia = new infomanusia();
echo $infomanusia->cetak($manusia1);
echo "<br>";
echo "<br>";
echo $infomanusia->cetak($manusia2);



?>