<?php

class prima{
	
	private $nilai;
	
	public function __construct($a){
		$this->nilai = $a;
	}
	
	public function cekPrima(){
		for($i=1;$i<=$this->nilai;$i++){  //smw angka yg akan di cek
              
              $counter = 0; 
              for($j=1;$j<=$i;$j++){ //smw kemungkinan faktor pembagi
                  
                    //jika angka yg akan dicek habis dibagi faktor pembagi, counter nya +1
                    if($i % $j==0){ 
                        
                          $counter++;
                    }
              }
            
           //jumlah warna hijau / faktor habis bagi nya harus 2 
            if($counter==2){
                 
                   print $i." adalah bilangan prima <br>";
            }
		}
	}
} 
	
	$angka1 = new prima(100);
	
	echo $angka1->cekPrima();

?>
