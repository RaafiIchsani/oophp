<?php 



class Produk{
	
	public $judul ="judul";
	public $penulis ="penulis";
  	public $penerbit = "penerbit";
	public $harga = "0";

public function __construct($judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga =0){

	$this->judul = $judul;
	$this->penulis =$penulis;
	$this->penerbit = $penerbit;
	$this->harga = $harga;


}


public function getLabel(){
	return "$this->penulis, $this->penerbit";
}


}


$produk1 = new Produk("Naruto","Masashi kishimoto","shonen Jump",30000);


$produk2 = new Produk("uncharted","Neil Druckmann","Sony Computer",250000);

$produk3 = new Produk("Dragon Ball");
echo "komik :". $produk1->getLabel();
echo "<br>";
echo "game:". $produk2->getLabel();
echo "<br>";
var_dump($produk3);

// echo $produk3->getLabel;

// echo "<hr>";



// echo "<br>";
// echo $produk3->getLabel();






