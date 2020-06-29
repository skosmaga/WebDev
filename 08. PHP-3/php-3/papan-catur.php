<?php

function papan_catur($angka) {
  // tulis kode di sini
  echo "Ini Adalah Gambar Papan Catur " . $angka . " x ". $angka . ": <br>";
  $i=0;
  while($i<$angka){
    $j=0;
    if($i%2==0){
      while($j<$angka){
        echo "# ";
        $j++;
      }
    }
    else{
      echo "&nbsp";
      while($j<$angka-1){
        echo "# ";
        $j++;
      }
    }
    echo "<br>";
    $i++;
  }
  echo "<br><br>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/*
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # #
# # # # #
*/
