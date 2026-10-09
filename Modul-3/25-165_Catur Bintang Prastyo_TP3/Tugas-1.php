<?php
$fruits = array("Avocado", "Blueberry", "Cherry");

array_push($fruits, "Durian", "Elderberry", "Fig", "Grape", "Honeydew");

echo "fruits = ( \"" . implode("\", \"", $fruits) . "\" )<br>";
echo "Nilai dengan indeks tertinggi: " . $fruits[array_key_last($fruits)] . "<br><br>";

unset($fruits[1]);

echo "Data Blueberry dihapus.<br>";
echo "fruits = ( \"" . implode("\", \"", $fruits) . "\" )<br>";
echo "Nilai dengan indeks tertinggi: " . $fruits[array_key_last($fruits)] . "<br>";
?>