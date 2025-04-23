<?php 

spl_autoload_register(function($class) {
  require_once "Buku/{$class}.php";
});