<?php

require_once 'app/init';

// $produk1 = new komik("Naruto","Masashi kishimoto","shonen Jump",30000, 100 );


// $produk2 = new Game("uncharted","Neil Druckmann","Sony Computer",250000, 50);


// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();
// echo"<hr>";
use app\service\User as serviceUser;
use app\produk\User produkUser;


new serviceUser();
echo"<br>";
new produkUser();






 ?>