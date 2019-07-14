<?php
function mrBruno($operator,$total,array $digit){
	$i= 0;
	$nums = ""; //Declare a variable with empty set.
	while ($i<$total){
		$i++;
		$nums = $nums.$i;
	}
	foreach ($digit as $key => $value) {
		$array[]= $nums[$value-1];
	}	
    if ($operator == "SUM") {
        echo $array[0]+$array[1]+$array[2];
    }elseif ($operator == "MUL") {
        echo $array[0]*$array[1]*$array[2];
    }elseif ($operator == "SUB") {
        echo $array[0]-$array[1]-$array[2];
    }elseif ($operator == "DIV") {
        echo $array[0]/$array[1]/$array[2];
    }else {
        echo "Operator Tidak Ditemukan";
    }

}
mrBruno('SUM',20,array(11,13,15));
echo " - ";
mrBruno('MUL',20,array(12,15,17));
?>