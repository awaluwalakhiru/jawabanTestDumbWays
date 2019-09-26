<?php

$k = 2;
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        if ($k%$i==0) {
			echo "";;        	
        }else{
        	echo $k . " ";
        }
        $k++;
    }
    echo "<br>";
}
