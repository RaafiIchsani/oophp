<?php 



class Produk{
	
	public $judul ="judul";
	public $penulis ="penulis";
  	public $penerbit = "penerbit";
	public $harga = "0";
public function getLabel(){
	return "$this->penulis, $this->penerbit";
}


}
// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $Produk2 = new Produk ();
// $Produk2->judul ="uncharted";
// $Produk2->tambahproperty ="hahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul ="Naruto";
$produk3->penulis ="Masashi kishimoto";
$produk3->penerbit ="shonen Jump";
$produk3->harga = 30000;


$produk4 = new Produk();
$produk4->judul ="uncharted";
$produk4->penulis ="Neil Druckmann";
$produk4->penerbit ="Sony Computer";
$produk4->harga = 250000;

echo "komik :". $produk3->getLabel();
echo "<br>";
echo "game:". $produk4->getLabel();

// echo $produk3->getLabel;

// echo "<hr>";



// echo "<br>";
// echo $produk3->getLabel();






