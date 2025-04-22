<?php 

class Komik extends Produk implements infoProduk {
  public $jmlHalaman;

  public function getInfo()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
  }  

  public function __construct($Judul = "Judul", $penulis  = "penulis", $penerbit  = "penerbit", $harga = 0, $jmlHalaman = 0)
  {

    parent::__construct($Judul, $penulis, $penerbit, $harga);

    $this->jmlHalaman = $jmlHalaman;

  }

  public function getInfoProduk()
  {
    $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }

}