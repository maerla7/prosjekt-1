<?php

$sum = 0;

for ($tall = 1; $tall <= 10; $tall++)
{
  $sum += $tall;
}

$gjennomsnitt = $sum / 10;


{
  echo "Summen av tallene fra 1-10 er: $sum <br>";
  echo "Gjennomsnittet av tallene 1-10 er: $gjennomsnitt";
}
?>