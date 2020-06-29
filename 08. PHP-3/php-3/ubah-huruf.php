<?php
function ubah_huruf($string){
//kode di sini
  $dataBase=range("a","z");
  $arr_string=str_split($string);
  $new_string="";
  for($i=0;$i<count($arr_string);$i++){
    $new_index=array_search(strtolower($arr_string[$i]),$dataBase)+1;
    $new_string=$new_string.$dataBase[$new_index];
  }
  echo "Perubahan huruf dari kata <b>" .$string."</b> adalah : <b>";
  echo $new_string;
  echo "</b> <br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>
