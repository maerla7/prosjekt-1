<?php

$sum = 0
$gjennomsnitt = $sum / 10;

for ($tall = 1; $tall <= 10; $tall++)
{
  $sum += $tall;
}

{
  echo "Summen av tallene fra 1-10 er $sum";
  echo "Gjennomsnittet av tallene 1-10 er $gjennomsnitt";
}
?>