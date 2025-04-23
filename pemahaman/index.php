<?php 

require_once "App/init.php";

$buku1 = new Fiksi("London Love Story","Tisa TS dan didampingi oleh Stanley Meulen","Loveable","Desember 2015","192",150000,"Romance");

echo $buku1->getInfoBuku();