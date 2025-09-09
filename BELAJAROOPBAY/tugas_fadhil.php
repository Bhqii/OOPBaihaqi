<?php
class Pegawai {
    public $nama_lengkap;      
    private $nomor_induk;      
    protected $jabatan;        

  
    public function __construct($nama_lengkap, $nomor_induk, $jabatan) {
        $this->nama_lengkap = $nama_lengkap;
        $this->nomor_induk = $nomor_induk;
        $this->jabatan = $jabatan;
    }

    
    public function setDataJabatan($jabatan) {
        $this->jabatan = $jabatan;
    }

    
    public function getDataPegawai() {
        return "Nama: " . $this->nama_lengkap . "<br>" .
               "Nomor Induk: " . $this->nomor_induk . "<br>" .
               "Jabatan: " . $this->jabatan . "<br>";
    }

   
    public function getDataNomorInduk() {
        return $this->nomor_induk;
    }
}


$pegawai1 = new Pegawai("Budi Santoso", "12345", "Staff IT");


echo "<h3>Profil Pegawai:</h3>";
echo $pegawai1->getDataPegawai();


echo "<h3>Uji Visibilitas:</h3>";
echo "Nomor Induk via method: " . $pegawai1->getDataNomorInduk() . "<br>";

$pegawai1->setDataJabatan("Manager");
echo "<br><strong>Setelah Jabatan Diubah:</strong><br>";
echo $pegawai1->getDataPegawai();
?>