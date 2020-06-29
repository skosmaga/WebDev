<?php
function tukar_besar_kecil($string){
//kode di sini
  $dataBase1=range("a","z");
  $dataBase2=range("A","Z");
  $arr_string=str_split($string);
  $new_string="";
  for($i=0;$i<count($arr_string);$i++){
    if(is_numeric(array_search($arr_string[$i],$dataBase1))>0){
      $new_string=$new_string.strtoupper($arr_string[$i]);
    } elseif(is_numeric(array_search($arr_string[$i],$dataBase2))>0){
      $new_string=$new_string.strtolower($arr_string[$i]);
    }
      else
      $new_string=$new_string.$arr_string[$i];
  }
  echo $new_string."<br>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>
