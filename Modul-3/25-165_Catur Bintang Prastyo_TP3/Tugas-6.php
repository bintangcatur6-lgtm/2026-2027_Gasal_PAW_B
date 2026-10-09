<?php
$a = array("A");
echo "Array awal: (\"A\")<br>";
array_push($a, "B");
echo "Hasil array_push: " . implode(" ", $a) . "<br><br>";
$b = array("A", "B");
$c = array("C");
echo "Array awal: (\"A\", \"B\") digabung dengan (\"C\")<br>";
$gabung = array_merge($b, $c);
echo "Hasil array_merge: " . implode(" ", $gabung) . "<br><br>";

$x = array("x" => 1, "y" => 2);
echo "Array awal: (\"x\" => 1, \"y\" => 2)<br>";
echo "Hasil array_values: " . implode(" ", array_values($x)) . "<br><br>";

$cari = array("A", "B", "C");
echo "Mencari \"B\" pada array: (\"A\", \"B\", \"C\")<br>";
echo "Hasil array_search: " . array_search("B", $cari) . "<br><br>";

$filter = array(0, 1, false, 2, "", 3, "array");
echo "Array awal: (0, 1, false, 2, \"\", 3, \"array\")<br>";
echo "Hasil array_filter: " . implode(" ", array_filter($filter)) . "<br><br>";

$s1 = array(3, 1, 2);
echo "Array awal: (3, 1, 2)<br>";
$sortAsc = $s1;
sort($sortAsc);
echo "Hasil sort: " . implode(" ", $sortAsc) . "<br>";
$sortDesc = $s1;
rsort($sortDesc);
echo "Hasil rsort: " . implode(" ", $sortDesc) . "<br><br>";

$umur = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
echo "Array awal: (\"Peter\"=>35, \"Ben\"=>37, \"Joe\"=>43)<br>";

$t = $umur; asort($t);
echo "Hasil asort: " . cetakAsosiatif($t) . "<br>";

$t = $umur; ksort($t);
echo "Hasil ksort: " . cetakAsosiatif($t) . "<br>";

$t = $umur; arsort($t);
echo "Hasil arsort: " . cetakAsosiatif($t) . "<br>";

$t = $umur; krsort($t);
echo "Hasil krsort: " . cetakAsosiatif($t) . "<br>";

function cetakAsosiatif($arr) {
    $hasil = array();
    foreach ($arr as $kunci => $nilai) {
        $hasil[] = "$kunci=> $nilai";
    }
    return implode(", ", $hasil);
}
?>