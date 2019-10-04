<?php 

// class ContohStatic{
// 	public static $angka = 1;

// 	public static function halo(){
// 		return "Halo." . self::angka++. "kali.";
// 	}
// }

// echo ContohStatic ::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo"<hr>";
// echo ContohStatic::halo();


class Contoh{
	public static $angka = 1;

	public function halo (){
		return "Halo". self::angka++ .<br>";
	}
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo"<br>";

$obj = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

 ?>
