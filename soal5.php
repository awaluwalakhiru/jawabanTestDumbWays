<?php
$x = 10;
// loop baris
for ($i = 1; $i <= $x; $i++) {
    // loop kolom
    for ($j = $x; $j>= $i; $j--) {
        if ($i == $j) {
            echo "*<br>";
        } else {
            echo "=";
        }
    }
}
