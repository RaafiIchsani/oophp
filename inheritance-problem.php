<?php 



class Produk{
	
	public $judul ="judul";
	public $penulis ="penulis";
  	public $penerbit = "penerbit";
	public $harga = "0";
	public $jmlHalaman= "";
	public $waktuMain;
	public $tipe;
public function __construct($judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga =0, $jmlHalaman = 0, $waktuMain = 0, $tipe){

	$this->judul = $judul;
	$this->penulis =$penulis;
	$this->penerbit = $penerbit;
	$this->harga = $harga;
	$this->jmlHalaman = $jmlHalaman;
	$this->waktuMain = $waktuMain;
	$this->tipe = $tipe;


}


public function getLabel(){
	return "$this->penulis, $this->penerbit";
}

public function getInfoLengkap(){
	komik : Naruto | Masashi kishimoto, shonen Jump (Rp. 30000) - 100 halaman.

	$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
	if($this->tipe == "komik"){
		$str .= " -{$this->jmlHalaman} Halaman.";
	}else if($this->tipe == "game"){
		$str .= "~{$this->waktuMain} Jam.";
	}

	return $str;



}


}




class CetakInfoProduk{
	public function cetak(produk $Produk ){
		$str ="{$produk->judul} | {$produk->getLabel()}(Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new Produk("Naruto","Masashi kishimoto","shonen Jump",30000, 100, 0, "komik");


$produk2 = new Produk("uncharted","Neil Druckmann","Sony Computer",250000, 0, 50, "game");



echo $produk1->getInfoLengkap();
echo "<br>"
echo $produk2->getInfoLengkap();





