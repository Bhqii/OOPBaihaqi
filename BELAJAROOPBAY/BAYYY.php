<?php
  class ProdukBarang
  {
    private $namaBarang;
    private $hargaBarang;
    protected $kategoriBarang;
    private static $jumlahProduk = 0;

    const DISKON = 0.2;

    public function __construct($nama, $harga, $kategori)
    {
        $this->namaBarang = $nama;
        $this->hargaBarang = $harga;
        $this->kategoriBarang = $kategori;
        static::$jumlahProduk++;
    }

    public function getDetailProduk()
    {
        return "Produk: {$this->namaBarang} | Harga: Rp. {$this->hargaBarang} | Kategori: {$this->kategoriBarang} </br>";
    }

    public function getHargaDiskonProduk()
    {
        $hargaDiskon = $this->hargaBarang - ($this->hargaBarang * static::DISKON);
        return "Harga setelah diskon yaitu Rp. " . number_format($hargaDiskon, 0, ',', ',');
    }

    public static function getJumlahProduk()
    {
        return static::$jumlahProduk;
    }
  }

  $produkl = new ProdukBarang("Laptop", 7500000, "Elektronik");
  $produk2 = new ProdukBarang("PC", 2500000, "Elektronik");
  $produk3 = new ProdukBarang("Printer", 5500000, "Elektronik");

  echo $produkl->getDetailProduk();
  echo $produkl->getHargaDiskonProduk() . "</br>";

  echo "</br>";

  echo $produk2->getDetailProduk();
  echo $produk2->getHargaDiskonProduk() . "</br>"; 

  echo "</br>";

  echo $produk3->getDetailProduk();
  echo $produk3->getHargaDiskonProduk() . "</br>";

  echo "</br>";
  $jumlah = ProdukBarang:: getJumlahProduk();
  echo "Total produk atau barang yang dibuat adalah : " . $jumlah;
?>