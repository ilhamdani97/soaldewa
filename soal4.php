<?php
function buyEgg($tanggal,$uang){
    $harga = 2000;
    $beli = $uang/$harga;
    // Menentukan Tgl Prima
    for($i=1;$i<=$tanggal;$i++){  
              
              $syarat = 0; 
              for($j=1;$j<=$i;$j++){ //smw kemungkinan faktor pembagi
                  
                    //jika angka yg akan dicek habis dibagi faktor pembagi, counter nya +1
                    if($i % $j==0){ 
                          $syarat++;
                    }
              }
            
           //jumlah warna hijau / faktor habis bagi nya harus 2 
            if($syarat==2){
                if ($tanggal == $i) {
                    $bonus_prima = round($beli/12); 
                    $bonus = $bonus_prima; 
                }else {
                    $bonus_prima = 0; 
                    $bonus = $bonus_prima; 
                }
            }
     }
    // Bounus Jika Tanggal Ganjil
    if($tanggal %2 == 1){
        $bonus_ganjil = round($beli/20);
        $ganjil = $bonus_ganjil * 3;
        $bonus = $ganjil + $bonus_prima; 
    }
   //Bonus Jika Angka Kelipatan 5 dan Bonus nya Genap
    if ($tanggal%5 ==0 && $bonus %2 == 0){
        $total_bonus = $bonus * 10;
        //Bonus Jika Angka Kelipatan 5 dan Bonus nya Ganjil
    }elseif($tanggal%5 ==0 && $bonus %2 == 1){
        $total_bonus = $bonus * 5;
    }else {
        $total_bonus = $bonus;
    }
    $total_beli = $beli+$total_bonus;
    echo $total_beli;
}
buyEgg(25,50000);
?>