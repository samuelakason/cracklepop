<?php

$c1 = "Crackle";
$c2 = "Pop";
$c3 = "CracklePop";

for ($i=1; $i < 101; $i++) { 
    if ($i % 3 === 0) {
        echo "$c1 <br>";
    }
    elseif ($i % 5 === 0) {
        echo "$c2 <br>";
    }
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "$c3 <br>";
    }
    else {
        echo "This is number $i <br>";
    }
}

?>
