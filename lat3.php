<?php
// buat class laptop
class laptop {
   // buat property untuk class laptop
   var $pemilik;
  
   // buat method untuk class laptop
   function hidupkan_laptop() {
     return "Hidupkan Laptop";
   }
   
   function matikan_laptop() {
    return "Matikan Laptop Dong";
	}

	function kalkulasi(){
	$x = 2;
	$y = 3;

	echo  $x = $y;
	}
	
	function hitung_segitiga($a,$t) {
		$luas = 1/2 * $a * $t;
		echo $luas; 
		
	}
} 
?>

<?php
// buat objek dari class laptop (instansiasi)

	

$laptop_anto = new laptop();
$laptop_andi = new laptop();
$laptop_dina = new laptop();

// set property
$laptop_anto->pemilik="Anto";
$laptop_andi->pemilik="Andi";
$laptop_dina->pemilik="Dina";
  
// tampilkan property
	echo $laptop_anto->pemilik; // Anto
	echo "<br />";
	echo $laptop_andi->pemilik; // Andi
	echo "<br />";
	echo $laptop_dina->pemilik; // Dina
	echo "<br />";
	echo $laptop_anto->hidupkan_laptop(); // Dina
	echo "<br />";
	echo $laptop_anto->matikan_laptop(); // Dina
	echo "<br />";
	echo $laptop_anto->hitung_segitiga(4,8);
	


?>