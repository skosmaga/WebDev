<?php
$angka_baru="";
function reverse_angka($angka){
  global $angka_baru;
  strval($angka);
  $angka_baru="";
  $arr_angka=str_split($angka);
  $i=0;
  while($i<count($arr_angka)){
    $angka_baru=$angka_baru.$arr_angka[count($arr_angka)-($i+1)];
    $i++;
  }
}

function palindrome_angka($angka) {
  echo "Angka ". $angka. " adalah ";
  global $angka_baru;
  reverse_angka($angka);
  if($angka == $angka_baru){
    $angka++;
    reverse_angka($angka);
    while($angka!=$angka_baru){
      $angka++;
      reverse_angka($angka);
    }
    echo "palindrome. Palindrome setelahnya adalah ".$angka."<br>";
  }
  else{
    while($angka!=$angka_baru){
      $angka++;
      reverse_angka($angka);
    }
    echo "bukan palindrome. Palindrome terdekat adalah ".$angka."<br>";
  }
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>
