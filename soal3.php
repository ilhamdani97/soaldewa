<?php
	function prasa($kata,$prasa){
        $kata_kebalik = strrev($kata);// membalikan kata
        $jumlah_prasa = 0;
        $array_kata = str_split($kata); 
        $array_kata_kebalik = str_split($kata_kebalik); // menjadikan array
        $array_prasa= str_split($prasa);
        // menghitung jumlah array
        for ($i = 0; $i <= (count($array_kata_kebalik) - count($array_prasa)); $i++) {
            $hasil = "";
            for ($j = $i; $j < ($i + count($array_prasa)); $j++) {
                $hasil .= $array_kata[$j];
            }
            if ($hasil == $prasa) {
                $jumlah_prasa++;
            }
        }
        
        for ($i = 0; $i <= (count($array_kata_kebalik)- count($array_prasa)); $i++) {
            $hasil = "";
            for ($j = $i; $j < ($i + count($array_prasa)); $j++) {
                $hasil .= $array_kata_kebalik[$j];
            }
            if ($hasil == $prasa) {
                $jumlah_prasa++;
            }
        }
        echo  $jumlah_prasa , " prasa";
}
prasa('bananananana','nana');
?>