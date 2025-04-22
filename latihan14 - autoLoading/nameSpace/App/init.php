<?php 

spl_autoload_register(function($class) {
  // Memecah bagian 
  //! App\Produk\User => ["App","Produk","User"]
  $class = explode('\\', $class);
  //! Mengambil array yang paling akhir 
  $class = end($class);
  require_once "Produk/{$class}.php";
});

spl_autoload_register(function($class) {
  // Memecah bagian 
  //! App\Produk\User => ["App","Produk","User"]
  $class = explode('\\', $class);
  //! Mengambil array yang paling akhir 
  $class = end($class);
  require_once "Services/{$class}.php";
});

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';
// require_once 'Services/User.php';