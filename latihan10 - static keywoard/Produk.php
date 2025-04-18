<?php 

class ContohStatic {
  public static $nama = "Efraim urel palodang";

  public static function tampilNama(  ) {
    return "Hallo, " . self::$nama . " Selamat datang!!";
  }
}

echo ContohStatic::$nama;
echo "<br>";
echo ContohStatic::tampilNama();
