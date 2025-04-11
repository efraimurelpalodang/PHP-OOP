<?php 
//! property dan method

class Produk {
  public $Judul = "Judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }

}

// $produk1 = new Produk();
// $produk2 = new Produk();
// $produk1->Judul =  "Naruto";
// $produk2->Judul =  "Unchurtad";
// $produk2->Judul =  "Unchurtad";
// var_dump($produk1->Judul);
// var_dump($produk2->Judul);

$produk3 = new Produk();
$produk3->Judul = "Naruto";
$produk3->penulis = "Masashi Kisimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->Judul = "uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik : {$produk3->getLabel()}";
echo "<br> <hr>";
echo "Game : {$produk4->getLabel()}";