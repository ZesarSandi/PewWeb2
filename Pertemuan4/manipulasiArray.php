<?php

$hari = ["senin", "selasa", "rabu"];

echo "array awal: ";
print_r($hari);
echo "<hr>";

echo "array setelah di pop: ";
$elemenYangDiPop = array_pop($hari);
print_r($hari);
echo "<br>elemen yang di pop: $elemenYangDiPop<hr>";

echo "array setelah di push: ";
array_push($hari, "kamis", "jumat");
print_r($hari);
echo "<hr>";

echo "array setelah di shift: ";
$elemenYangDiShift = array_shift($hari);
print_r($hari);
echo "<br>elemen yang di shift: $elemenYangDiShift<hr>";

echo "array setelah di unshift: ";
array_unshift($hari, "elemen", "ditambahkan");
print_r($hari);

?>
