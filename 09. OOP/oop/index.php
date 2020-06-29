<?php
require_once "animal.php";
require_once "ape.php";
require_once "frog.php";

$sheep = new animal("shaun");
echo "Nama Hewan Ini Adalah <b>".$sheep->get_name()."</b><br>";
echo "Merupakan Hewan Berkaki <b>".$sheep->get_legs()."</b><br>";
echo "Apakah Hewan Ini Berdarah Dingin? <b>".$sheep->get_cold_blooded()."</b><br>";
echo "<br>";

$sungokong=new ape("kera sakti");
echo "Nama Hewan Ini Adalah <b>".$sungokong->get_name()."</b><br>";
echo "Merupakan Hewan Berkaki <b>".$sungokong->get_legs()."</b><br>";
echo "Apakah Hewan Ini Berdarah Dingin? <b>".$sungokong->get_cold_blooded()."</b><br>";
$sungokong->yell();
echo "<br>";

$kodok=new frog("buduk");
echo "Nama Hewan Ini Adalah <b>".$kodok->get_name()."</b><br>";
echo "Merupakan Hewan Berkaki <b>".$kodok->get_legs()."</b><br>";
echo "Apakah Hewan Ini Berdarah Dingin? <b>".$kodok->get_cold_blooded()."</b><br>";
$kodok->jump();
echo "<br>";
?>
