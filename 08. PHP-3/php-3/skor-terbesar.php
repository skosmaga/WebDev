<?php
function skor_terbesar($arr){
//kode di sini
  $kelas=array_values(array_unique(array_column($arr,"kelas")));
  echo "Berikut Data Peserta Training Sanbercode <br>";
  print_r($arr);
  echo "<br><br> Berikut Peserta dengan Nilai Terbesar Per Kelasnya <br>";

  $arr_nilai_max=[];
  for($i=0;$i<count($kelas);$i++){
    $arr_kelas=[];
    for($j=0;$j<count($arr);$j++){
      if($kelas[$i]==$arr[$j]["kelas"]){
        array_push($arr_kelas,$arr[$j]);
      }
    }

    if(count($arr_kelas>1)){
      $max_nilai=max(array_column($arr_kelas,"nilai"));
      $index=array_search($max_nilai, array_column($arr,"nilai"));
      array_push($arr_nilai_max,$arr[$index]);
    }

    else{
      array_push($arr_nilai_max,$arr_kelas);
    }

  }
  $nilai_max_all=array_combine($kelas,$arr_nilai_max);
  print_r($nilai_max_all);
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>
