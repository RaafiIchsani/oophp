<?php 



class Produk{
	
	public $judul ="judul";
	public $penulis ="penulis";
  	public $penerbit = "penerbit";
	public $harga = "0";
	public $jmlHalaman;
	public $waktuMain;
	
public function __construct($judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga =0, $jmlHalaman = 0, $waktuMain = 0,){

	$this->judul = $judul;
	$this->penulis =$penulis;
	$this->penerbit = $penerbit;
	$this->harga = $harga;
	$this->jmlHalaman = $jmlHalaman;
	$this->waktuMain = $waktuMain;
	


}


public function getLabel(){
	return "$this->penulis, $this->penerbit";
}

public function getInfoProduk(){
	komik : Naruto | Masashi kishimoto, shonen Jump (Rp. 30000) - 100 halaman.

	$str = {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
	
	return $str;



}


}
 
class Game extends ProdukP{
	public function getInfoProduk(){
		$str = "Game: {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}-{$this-> waktuMain}Jam.";


	}
}

class komik extends Produk{
public function getInfokomik(){
$str = "komik: {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}-{$this-> jmlHalaman}Halaman.";
return $str;
}

}




class CetakInfoProduk{
	public function cetak(produk $Produk ){
		$str ="{$produk->judul} | {$produk->getLabel()}(Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new komik("Naruto","Masashi kishimoto","shonen Jump",30000, 100, 0, );


$produk2 = new Game("uncharted","Neil Druckmann","Sony Computer",250000, 0, 50,);



echo $produk1->getInfokomik();
echo "<br>"
echo $produk2->getInfoGame();





