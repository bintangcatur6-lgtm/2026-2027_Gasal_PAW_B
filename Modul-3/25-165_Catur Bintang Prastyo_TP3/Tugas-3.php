<?php
$height = array("Andy" => "176", "Barry" => "165", "Charlie" => "170");

$height["David"]  = "180";
$height["Ethan"]  = "172";
$height["Frank"]  = "168";
$height["George"] = "175";
$height["Harry"]  = "182";

echo "height = ( ";
foreach ($height as $nama => $tinggi) {
    echo "\"$nama\"=>\"$tinggi\" ";
}
echo ")<br>";
echo "Nilai dengan indeks terakhir: " . $height[array_key_last($height)] . "<br><br>";

unset($height["Barry"]);

echo "Data Barry dihapus.<br>";
echo "height = ( ";
foreach ($height as $nama => $tinggi) {
    echo "\"$nama\"=>\"$tinggi\" ";
}
echo ")<br>";
echo "Nilai dengan indeks terakhir setelah dihapus: " . $height[array_key_last($height)] . "<br><br>";
$weight = array("Andy" => "70", "Barry" => "65", "Charlie" => "75");

echo "Data kedua: " . array_values($weight)[1] . "<br>";
?>