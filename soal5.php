<?php
$x=10;
for ($i=1; $i <=$x ; $i++) {
for ($j=1; $j <= $i; $j++) { 
    if ($i==$j && $j==$i) {
        if($i==$j){
            echo"*";
            $j++;
        }
        echo"";
    }
    echo"<br/>";
}
}