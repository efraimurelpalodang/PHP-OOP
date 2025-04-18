<?php 
// tidak bisa digunakan didalam class
define("UMUR", "18");

class Coba {
  // bisa digunakan dalam class
  const NAMA = "Molly ajaa ginn";
  public $class = __CLASS__; 
}

function tes() {
  return __FUNCTION__;
}

$obj = new Coba();
echo "Berada di class : " . $obj->class;
echo "<br>";

echo "Berada di function : " . tes();
echo "<br>";
echo "Hallo, ".Coba::NAMA."!!.";
echo "<br>";
echo UMUR;
echo "<br>";
echo "<hr>";
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;