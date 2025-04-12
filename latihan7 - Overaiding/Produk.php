<?php 

class Produk {
  public $judul,
        $penulis,
        $penerbit,
        $harga;

  public function __construct($Judul = "Judul", $penulis  = "penulis", $penerbit  = "penerbit", $harga = 0)
  {
    $this->judul = $Judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel() 
  {
    return "$this->penulis, $this->penerbit";
  }

  public function infoProduk()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
  }  

}


class Komik extends Produk {
  public $jmlHalaman;

  public function __construct($Judul = "Judul", $penulis  = "penulis", $penerbit  = "penerbit", $harga = 0, $jmlHalaman = 0)
  {

    parent::__construct($Judul, $penulis, $penerbit, $harga);

    $this->jmlHalaman = $jmlHalaman;

  }

  public function infoProduk()
  {
    $str = "Komik : " . parent::infoProduk() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }

}

class Game extends Produk {
  public $waktuMain;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktuMain = $waktuMain;
  }

  public function infoProduk()
  {
    $str = "Game : " . parent::infoProduk() . " - {$this->waktuMain} Jam.";
    return $str;
  }

}



class CetakInfoProduk {
  public function cetak( Produk $produk ) {
    $str = "{$produk->judul} | {$produk->getLabel()}, | (Rp. {$produk->harga})";
    return $str;
  }
}




$produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000,100);
// $infoProduk1 = new CetakInfoProduk();
$produk2 = new Game("uncharted","Neil Druckmann","Sony Computer",25000,50);

echo $produk1->infoProduk();
echo "<br>";
echo $produk2->infoProduk();
