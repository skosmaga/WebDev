<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
  echo "Apakah Deret ";
  print_r($arr);
  echo " Merupakan Deret Aritmatik? <br> Jawab : ";
  $beda_arr=array();
  for($i=0;$i<count($arr)-1;$i++){
    array_push($beda_arr,$arr[$i+1]-$arr[$i]);
  }
  sort($beda_arr);
  if($beda_arr[0]==$beda_arr[count($beda_arr)-1]){
    echo "<b>TRUE</b> <br>";
  }
  else{
    echo "<b>FALSE</b> <br>";
  }
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>
