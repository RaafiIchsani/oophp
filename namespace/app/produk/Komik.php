<?php 

class komik extends Produk implements InfoProduk{
	public $jmlHalaman
	public function__construct($judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga =0, $jmlHalaman = 0,){

		parent::__construct($judul, $penulis , $penerbit, $harga);
		$this->jmlHalaman=$jmlHalaman;
	}
	public function getInfoProduk(){
		$str ="komik:".this->getInfo()."-{$this->jmlHalaman} Halaman."; return $str;
	}

	public function getInfo(){
	
	$str = {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
	
	return $str;



}
}



 ?>