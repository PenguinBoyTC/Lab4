<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

   echo "<p>Hello, World!</p>";
   //Inside myfirstprogram.php
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = <b>" . sum(5, 10) . "</b><br>";
echo "7 + 13 = <b>" . sum(7, 13) . "</b><br>";
echo "2 + 4 = <b>" . sum(2, 4) . "</b>";
?>
