<?php
echo ("Welke operatie wil je uitvoeren? (+, -, %)");
$operatie = readline();
if (is_numeric($operatie)){
  echo (" $operatie is geen operatie");
  exit;
  }
echo ("Voer een cijfer in");
$cijfer1 = readline();
if ($cijfer1 != is_numeric($cijfer1)){
  echo (" $cijfer1 is geen cijfer");
  exit;
}

echo ("Voer nog een cijfer in");
$cijfer2 = readline();
if ($cijfer2 != is_numeric($cijfer2)){
  echo (" $cijfer2 is geen cijfer");
  exit;
}
$antwoord1 = ($cijfer1+$cijfer2);
$antwoord2 = ($cijfer1-$cijfer2);
$antwoord3 = ($cijfer1%$cijfer2);
if ($operatie === '+'){
  echo ($cijfer1 ." + " . $cijfer2 . " = ". $antwoord1);
}
elseif($operatie === '-'){
    echo ($cijfer1 ." - " . $cijfer2 . " = ". $antwoord2);
}
elseif($operatie === '%'){
    echo ($cijfer1 ." % " . $cijfer2 . " = ". $antwoord3);
}

 ?>
