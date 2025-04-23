<?php 

class Fiksi extends Buku {
  private $genre;

  public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $tahunTerbit = "tahun", $halaman = 0, $harga = 0, $genre = "genre")
  {
    parent::__construct($judul,$penulis,$penerbit,$tahunTerbit,$harga,$halaman);
    $this->genre = $genre;
  }

  public function getInfoBuku()
  {
    $str = "Fiksi : {$this->genre} - " . parent::infoBuku();
    return $str;
  }
}