<?php
function pasangan_terbesar($angka){
// kode di sin
  strval($angka);
  $arr_angka=str_split($angka);
  $couple_angka=array();
  for ($i=0; $i<count($arr_angka)-1; $i++){
    array_push($couple_angka,$arr_angka[$i].$arr_angka[$i+1]);
  }
  echo "Pasangan Terbesar dari ".$angka." adalah ";
  echo max($couple_angka)."<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>
