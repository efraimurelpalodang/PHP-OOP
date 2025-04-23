<?php 

abstract class Buku {
  private $judul,
          $penulis,
          $penerbit,
          $tahunTerbit,
          $halaman,
          $harga; 

  public function __construct($judul, $penulis, $penerbit, $tahunTerbit, $harga, $halaman)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->tahunTerbit = $tahunTerbit;
    $this->halaman = $halaman;
    $this->harga = $harga;
  }

  abstract public function getInfoBuku();

  public function infoBuku() 
  {
    $str = "{$this->judul} | {$this->penulis} - {$this->penerbit}, {$this->tahunTerbit}. - {$this->halaman} halaman, (Rp. {$this->harga})";
    return $str;
  }
          
}