<?php 

class Produk {
  public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $type;

  public function __construct($Judul = "Judul", $penulis  = "penulis", $penerbit  = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $type)
  {
    $this->judul = $Judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->type = $type;
  }

  public function getLabel() 
  {
    return "$this->penulis, $this->penerbit";
  }

  public function infoLengkap()
  {
    $str = "{$this->type} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    if ($this->type == "Komik") {
      $str .= " - {$this->jmlHalaman} Halaman";
    } else if ($this->type == "Game") {
      $str .= " - {$this->waktuMain} Waktu Main";
    }

    return $str;
  }
  

}

class CetakInfoProduk {
  public function cetak( Produk $produk ) {
    $str = "{$produk->judul} | {$produk->getLabel()}, | (Rp. {$produk->harga})";
    return $str;
  }
}




$produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100, 0, "Komik");
// $infoProduk1 = new CetakInfoProduk();
$produk2 = new Produk("uncharted","Neil Druckmann","Sony Computer",25000,0,50,"Game");

echo $produk1->infoLengkap();
echo "<br>";
echo $produk2->infoLengkap();
