<?php 

abstract class Produk {
  private   $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;


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

  abstract public function getInfoProduk();


  public function getInfo()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
  }  

  public function getJudul()
  {
    return $this->judul;
  }

  public function setJudul($judul) 
  {
    if( !is_string($judul) ) {
      throw new Exception("Judul harus string");
    }
    $this->judul = $judul;
  }
  
  public function getPenulis() 
  {
    return $this->penulis;
  }

  public function setPenulis($penulis) 
  {
    $this->penulis = $penulis;
  }

  public function getPenerbit() 
  {
    return $this->penerbit;
  }

  public function setPenerbit($penerbit) 
  {
    $this->penerbit = $penerbit;
  }

  public function getHarga()
  {
    return $this->harga - ( $this->harga * $this->diskon / 100 );
  }

  public function getDiskon()
  {
    return $this->diskon;
  }

  public function setDiskon( $diskon ) 
  {
    $this->diskon = $diskon;
  }

}


class Komik extends Produk {
  public $jmlHalaman;

  public function __construct($Judul = "Judul", $penulis  = "penulis", $penerbit  = "penerbit", $harga = 0, $jmlHalaman = 0)
  {

    parent::__construct($Judul, $penulis, $penerbit, $harga);

    $this->jmlHalaman = $jmlHalaman;

  }

  public function getInfoProduk()
  {
    $str = "Komik : " . parent::getInfo() . " - {$this->jmlHalaman} Halaman.";
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

  public function getInfoProduk()
  {
    $str = "Game : " . parent::getInfo() . " - {$this->waktuMain} Jam.";
    return $str;
  }

}

class CetakInfoProduk {
  public $daftarProduk = [];

  public function tambahProduk( Produk $produk ) {
    $this->daftarProduk[] = $produk;
  }

  public function cetak() {
    $str = "DAFTAR PRODUK : <br>";

    foreach( $this->daftarProduk as $p ) {
      $str .= "- {$p->getInfoProduk()} <br>";
    }
    
    return $str;
  }
}




$produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000,100);
// $infoProduk1 = new CetakInfoProduk();
$produk2 = new Game("uncharted","Neil Druckmann","Sony Computer",250000,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
