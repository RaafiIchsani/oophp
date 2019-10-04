<?php 



abstract class Produk{	
	private	 $judul ="judul";
			 $penulis ="penulis";
  			 $penerbit = "penerbit";
  			 $harga = "0
  			 $diskon = 0;






	
public function __construct($judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga =0){

	$this->judul = $judul;
	$this->penulis =$penulis;
	$this->penerbit = $penerbit;
	$this->harga = $harga;
}

public function setJudul($judul){

	if(!is_string($judul)){

		throw new Exception("judul harus string");
		
	}
	$this->judul =$judul;
}
public function getjudul(){
	return $this->judul;
}

public function setPenulis ($penulis){
	$this->penulis = $penulis;
}



public function getPenulis(){
	return $this->penulis;
}

public function setPenerbit ($penerbit){
	$this->penerbit = $penerbit;
}

public function getPenerbit(){
	return $this->penerbit;
}
public function setDiskon($diskon){
	$this->diskon= $diskon;
}

public function getDiskon($diskon){
	return $this->diskon;
}
public function setHarga($harga){
	$this->harga = $harga;
}
public function getharga(){
		return $this->harga-($this->harga*diskon/100);
	}



public function getLabel(){
	return "$this->penulis, $this->penerbit";
}

abstract public function getInfoProduk();

public function getInfo(){
	
	$str = {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
	
	return $str;



}


}

class komik extends Produk{
	public $jmlHalaman
	public function__construct($judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga =0, $jmlHalaman = 0,){

		parent::__construct($judul, $penulis , $penerbit, $harga);
		$this->jmlHalaman=$jmlHalaman;
	}
	public function getInfoProduk(){
		$str ="komik:".this->getInfo()."-{$this->jmlHalaman} Halaman."; return $str;
	}
}
 
class Game extends Produk{
	public $waktuMain;

	public function__construct($judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga =0, $waktuMain = 0){
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain=$waktuMain
	}



	public function getInfoProduk(){
		$str = "Game: ". $this->getInfo()."-{$this-> waktuMain}Jam.";
		return $str;


	}
}

class komik extends Produk{
public function getInfokomik(){
$str = "komik: {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}-{$this-> jmlHalaman}Halaman.";
return $str;
}

}




class CetakInfoProduk{
	public $daftarProduk = array();

	public function tambahProduk(produk $produk){
		$this->daftarProduk[] =$produk;
	}

	public function cetak(){
		$str ="DAFTAR PRODUK: <br>";

	foreach($this->daftarProduk as $p){
		$str .= "-{$p->getInfoProduk()} <br>"
	}

		return $str;
	}
}


$produk1 = new komik("Naruto","Masashi kishimoto","shonen Jump",30000, 100 );


$produk2 = new Game("uncharted","Neil Druckmann","Sony Computer",250000, 50);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();





