<?php 

require_once 'App/init.php';

// $produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000,100);
// // $infoProduk1 = new CetakInfoProduk();
// $produk2 = new Game("uncharted","Neil Druckmann","Sony Computer",250000,50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

use App\Services\User as Services;
use App\Produk\User as Produk;

new Services;
echo "<br>";
new Produk;
// new App\Produk\User();