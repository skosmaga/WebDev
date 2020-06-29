<?php
function tentukan_deret_geometri($arr) {
// kode di sini
  echo "Apakah Deret ";
  print_r($arr);
  echo " Merupakan Deret Geometri? <br> Jawab : ";
  $beda_arr=array();
  for($i=0;$i<count($arr)-1;$i++){
    array_push($beda_arr,$arr[$i+1]/$arr[$i]);
  }
  sort($beda_arr);
  if($beda_arr[0]==$beda_arr[count($beda_arr)-1]){
    echo "<b>TRUE</b> <br>";
  }
  else{
    echo "<b>FALSE</b> <br>";
  }
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>
