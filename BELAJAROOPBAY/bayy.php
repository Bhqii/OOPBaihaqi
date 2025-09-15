<?php
class Siswa {
    public $nama;
    private $nis;
    private $nilai;
    private $jurusan;

    public function __construct($nama, $nis, $nilai, $jurusan) {
        $this->nama = $nama;
        $this->nis = $nis;
        $this->jurusan = $jurusan;
        $this->setNilaiSiswa($nilai);
        echo "Objek Siswa '{$this->nama}' berhasil dibuat.<br>";
    }

    public function tampilkanProfilSiswa() {
        echo "<strong>Profil Siswa:</strong><br>";
        echo "Nama: {$this->nama}<br>";
        echo "NIS: {$this->nis}<br>";
        echo "Jurusan: {$this->jurusan}<br>";
        echo "Nilai: {$this->nilai}<br>";
        echo "Status: " . $this->hitungStatusSiswa() . "<br><br>";
    }

    private function hitungStatusSiswa() {
        return ($this->nilai >= 75) ? "Lulus" : "Tidak Lulus";
    }

    public function setNilaiSiswa($nilaiBaru) {
        if ($nilaiBaru >= 0 && $nilaiBaru <= 100) {
            $this->nilai = $nilaiBaru;
        } else {
            echo "Nilai tidak valid untuk {$this->nama}. Harus antara 0 - 100.<br>";
            $this->nilai = 0;
        }
    }

    public function getNilaiSiswa() {
        return $this->nilai;
    }

    public function __destruct() {
        echo "Objek Siswa '{$this->nama}' telah dihapus.<br>";
    }
}

class Kelas {
    public $namaKelas;
    private $daftarSiswa = [];

    public function __construct($namaKelas) {
        $this->namaKelas = $namaKelas;
        echo "Kelas '{$this->namaKelas}' dibuat.<br><br>";
    }

    public function tambahSiswa($siswa) {
        $this->daftarSiswa[] = $siswa;
        echo "Siswa '{$siswa->nama}' ditambahkan ke kelas '{$this->namaKelas}'.<br>";
    }

    public function tampilkanSemuaSiswa() {
        echo "<hr><strong>Daftar Siswa di Kelas {$this->namaKelas}:</strong><br>";
        foreach ($this->daftarSiswa as $siswa) {
            $siswa->tampilkanProfilSiswa();
        }
    }

    public function hitungRataRataNilai() {
        $total = 0;
        $jumlah = count($this->daftarSiswa);
        foreach ($this->daftarSiswa as $siswa) {
            $total += $siswa->getNilaiSiswa();
        }
        $rata = ($jumlah > 0) ? $total / $jumlah : 0;
        echo "Rata-rata nilai kelas '{$this->namaKelas}' adalah: " . number_format($rata, 2) . "<br>";
    }
}

// Program utama
$kelas12RPL = new Kelas("XII RPL");

$siswa1 = new Siswa("Fadhil", "0012345", 88, "RPL");
$siswa2 = new Siswa("Farel", "0067890", 45, "RPL");
$siswa3 = new Siswa("Baihaqi", "0045321", 98, "RPL");

$kelas12RPL->tambahSiswa($siswa1);
$kelas12RPL->tambahSiswa($siswa2);
$kelas12RPL->tambahSiswa($siswa3);

$kelas12RPL->tampilkanSemuaSiswa();
$kelas12RPL->hitungRataRataNilai();
?>