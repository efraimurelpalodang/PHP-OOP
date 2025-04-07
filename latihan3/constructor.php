<?php 
//! property dan method

class Produk {
  public $Judul,
        $penulis,
        $penerbit,
        $harga;

  public function __construct($Judul = "Judul", $penulis  = "penulis", $penerbit  = "penerbit", $harga = 0)
  {
    $this->Judul = $Judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel() 
  {
    return "$this->penulis, $this->penerbit";
  }

}

$produk1 = new Produk("Naruto","Masashi Kisimoto","Shonen Jump",30000);
$produk2 = new Produk("uncharted","Neil Druckmann","Sony Computer",25000);
$produk3 = new Produk("Dragon Ball");

echo "Komik : {$produk1->getLabel()}";
echo "<br> <hr>";
echo "Game : {$produk2->getLabel()}";