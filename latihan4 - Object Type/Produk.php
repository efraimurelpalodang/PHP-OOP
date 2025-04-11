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

}

class CetakInfoProduk {
  public function cetak( Produk $produk ) {
    $str = "{$produk->judul} | {$produk->getLabel()}, | (Rp. {$produk->harga})";
    return $str;
  }
}




$produk1 = new Produk("Naruto","Masashi Kisimoto","Shonen Jump",30000);
$infoProduk1 = new CetakInfoProduk();
$produk2 = new Produk("uncharted","Neil Druckmann","Sony Computer",25000);

// echo "Komik : {$produk1->getLabel()}";
echo $infoProduk1->cetak($produk1);
echo "<br> <hr>";
echo "Game : {$produk2->getLabel()}";
