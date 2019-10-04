<?php 



class Produk{
	
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

public function getInfoProduk(){
	komik : Naruto | Masashi kishimoto, shonen Jump (Rp. 30000) - 100 halaman.

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
		$str ="komik:".parent::getInfoProduk()."-{$this->jmlHalaman} Halaman."; return $str;
	}
}
 
class Game extends Produk{
	public $waktuMain;

	public function__construct($judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga =0, $waktuMain = 0){
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain=$waktuMain
	}



	public function getInfoProduk(){
		$str = "Game: ".parent::getInfoProduk()."-{$this-> waktuMain}Jam.";
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
	public function cetak(produk $Produk ){
		$str ="{$produk->judul} | {$produk->getLabel()}(Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new komik("Naruto","Masashi kishimoto","shonen Jump",30000, 100 );


$produk2 = new Game("uncharted","Neil Druckmann","Sony Computer",250000, 50);



echo $produk1->getInfokomik();
echo "<br>";
echo $produk2->getInfoGame();
echo"<hr>";

$produk2->setDiskon= (50);

echo $produk2->getharga();
echo "<hr>";

$produk1->setPenulis="Penulis";
 echo $produk1->getPenulis();




