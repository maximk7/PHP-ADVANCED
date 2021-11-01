<?php

$student  = array(
  "voornaam"    => "Jan",
  "achternaam"  => "Janssen",
  "klas"        => "9A",
  "Leeftijd"    => 17,
  "Woonplaats"  => "Amstelveen"
);

$student = array("voornaam"=>"Jan", "achternaam"=>"Janssen", "klas"=>"9A", "leeftijd"=>17, "woonplaats"=>"Amstelveen");

foreach($student as $key => $value) {
  echo "De naam van $key is $value <br>";
}

?>