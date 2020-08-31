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


$manusia1 = new Manusia("Aziz Muhammad Fikhri", "10 september 2003", "Laki-laki", "Pelajar");
echo $manusia1->getcetak();

?>